<?php

namespace App\Classes;

use App\Models\Pattern;
use App\Models\Pattern\Transactions;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class DashboardReport
{
    public $year = null;
    public $month = null;

    public function __construct($year = null, $month= null)
    {
        if (!$year) {
            $this->year = 2019;
        }
        if (!$month) {
            $this->month = 10;
        }
    }

    public function getMonthSpending()
    {
        $categories = DB::table('transactions')
                ->select('category')
                ->whereYear('transactionDate', $this->year)
                ->whereMonth('transactionDate', $this->month)
                ->groupBy('category')
                ->get();
        $category= [];
        foreach ($categories as $c) {
            $category[] = $c->category;
        }
        $transactions = DB::table('transactions')
                ->select(
                    DB::raw('ROUND(SUM(amount), 2) as amt'),
                    DB::raw('DATE_FORMAT(transactionDate, "%M - %Y") as tdate'),
                    'transactionDate',
                    'category'
                )
                ->whereYear('transactionDate', $this->year)
                ->whereMonth('transactionDate', $this->month)
                ->groupBy('category', 'transactionDate')
                ->orderBy('transactionDate')
                ->get()->toArray();
        $data =[];
        $labels =[];
        foreach ($transactions as $t) {
            $t = (array) $t;
            $cat = Arr::get($t, 'category', '');
            $transactionDate = Arr::get($t, 'transactionDate', '');
            $labels[$transactionDate] = $transactionDate;
            foreach ($category as $c) {
                if ($cat == $c) {
                    $data[$c][$transactionDate] = Arr::get($t, 'amt', 0);
                } else {
                    $data[$c][$transactionDate] = 0;
                }
            }
        }
        $series=[];
        foreach ($data as $d){
          $series[]= array_values($d);
        }
        return array('series' => $series, 'labels' => array_values($labels));
    }
}
