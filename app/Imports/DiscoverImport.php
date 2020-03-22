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

class DiscoverImport implements OnEachRow
{
    /**
     * @param array $row
     *
     * @return Transactions|null
     */
     public function onRow(Row $row)
     {
       $rowIndex     = $row->getIndex();
       if($rowIndex==1){
         return;
       }
       $PncPatternFinde = PncPatternFinder::getInstance();
       $rowIndex     = $row->getIndex();
       $row          = $row->toArray();
       $date         = str_replace('/', '-', $row[1]);
       $row[1]       =  date('Y-m-d', strtotime($row[1]));
       $description = Arr::get($row, '2', NULL);
       if($description){
         $match = $PncPatternFinde->parsePattern($description);
         if(Arr::get($match, 'isFound', FALSE)){
            $trns = array(
                  'amount' => Arr::get($row, '3'),
                  'description' => $description,
                  'transactionType' => Arr::get($match, 'transactionType'),
                  'transactionDate' => Arr::get($row, '1'),
                  'category' => Arr::get($match, 'category'),
                  'subCategory' => Arr::get($match, 'subCategory'),
                  'transactionStatus' => Arr::get($match, 'transactionStatus'),
                );
         }else{
           $trns = array(
                 'amount' => Arr::get($row, '3'),
                 'description' => $description,
                 'transactionType' => 'DEBIT',
                 'transactionDate' => Arr::get($row, '1'),
                 'transactionStatus' => 'COMPLETED',
                 'category' => 'Unknown',
                 'subCategory' => 'Unknown',
               );
         }
         //print_r($trns);
         $trns['transactionID'] = 'Discover';
         $transaction  =  new Transactions();
         $transaction->create($trns);
       }
     }
}
