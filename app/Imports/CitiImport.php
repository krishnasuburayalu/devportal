<?php

namespace App\Imports;

use App\Transactions;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class CitiImport implements ToModel, WithHeadingRow
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
       $date         = str_replace('/', '-', $row[1]);
       $row[1]       =  date('Y-m-d', strtotime($date));
       $description = Arr::get($row, '2', NULL);
       if($description){
         $match = $PncPatternFinde->parsePattern($description);
         if(Arr::get($match, 'isFound', FALSE)){
           $transaction  =  new Transactions($row);
           $transaction->create([
                 'amount' => $row[1],
                 'description' => $row[2],
                 'transactionType' => Arr::get($match, 'transactionType'),
                 'transactionDate' => $row[0],
                 'category' => Arr::get($match, 'category'),
                 'subCategory' => Arr::get($match, 'subCategory'),
                 'transactionStatus' => Arr::get($match, 'transactionStatus'),
                 'updated_at' => now(),
             ]);
         }
       }

     }
}
