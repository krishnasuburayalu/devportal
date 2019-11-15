<?php

namespace App\Imports;

use App\Models\Transactions;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Row;
use App\Classes\PncPatternFinder;
use Illuminate\Support\Arr;




class PncImport implements OnEachRow
{
    /**
     * @param array $row
     *
     * @return Transactions|null
     */
    public function onRow(Row $row)
    {
      $PncPatternFinde = PncPatternFinder::getInstance();
      $rowIndex     = $row->getIndex();
      $row          = $row->toArray();
      $date         = str_replace('/', '-', $row[0]);
      $row[0]       =  date('Y-m-d', strtotime($date));
      $description = Arr::get($row, '2', NULL);
      if($description){
        $match = $PncPatternFinde->parsePattern($description);
        if(Arr::get($match, 'isFound', FALSE)){
          $trns = array(
                'amount' => $row[1],
                'description' => $row[2],
                'transactionType' => Arr::get($match, 'transactionType'),
                'transactionDate' => $row[0],
                'category' => Arr::get($match, 'category'),
                'subCategory' => Arr::get($match, 'subCategory'),
                'transactionStatus' => Arr::get($match, 'transactionStatus'),
                'updated_at' => now(),
            );
        }else{
          $trns = array(
                'amount' => Arr::get($row, '1'),
                'description' => $description,
                'transactionType' => 'CREDIT',
                'transactionDate' => Arr::get($row, '0'),
                'transactionStatus' => 'COMPLETED',
                'category' => 'Purchase',
                'subCategory' => 'shopping',
              );
        }
        //print_r($trns);
        $trns['transactionID'] = 'Pnc';
        $transaction  =  new Transactions();
        $transaction->create($trns);
      }

    }
}
