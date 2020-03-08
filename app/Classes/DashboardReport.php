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
    public $cat = null;
    public $subcat = null;

    public function __construct($year = null, $month= null, $cat= null, $subcat = null)
    {
        if ($year) {
          $this->year = $year;
        }
        if ($month) {
            $this->month = $month;
        }
        if ($cat) {
            $this->cat = $cat;
        }
        if ($subcat) {
            $this->subcat = $subcat;
        }
    }

    public function getCategoriesFilter()
    {
        $categories = DB::table('transactions')->select('category');
        if ($this->year) {
            $categories->whereYear('transactionDate', $this->year);
        }
        if ($this->month) {
            $categories->whereMonth('transactionDate', $this->month);
        }
        if ($this->cat) {
            $categories->where('category', $this->cat, '=');
        }
        if ($this->subcat) {
            $categories->where('subCategory', $this->subcat, '=');
        }

        $categories->whereNotIn('category', ['Payment', 'Payroll']);
        $categories = $categories->groupBy('category')->get();
        $category= [];
        foreach ($categories as $c) {
            $category[] = $c->category;
        }
        return $category;
    }

    public function getSubCategoriesFilter()
    {
        $categories = DB::table('transactions')->select('subCategory');
        if ($this->year) {
            $categories->whereYear('transactionDate', $this->year);
        }
        if ($this->month) {
            $categories->whereMonth('transactionDate', $this->month);
        }
        if ($this->cat) {
            $categories->where('category', $this->cat, '=');
        }
        if ($this->subcat) {
            $categories->where('subCategory', $this->subcat, '=');
        }
        $categories = $categories->groupBy('subCategory')->get();
        $category= [];
        foreach ($categories as $c) {
            $category[] = $c->subCategory;
        }
        return $category;
    }
    public function getMonthSpendingOverall()
    {
      $transactions = DB::table('transactions')
              ->select(
                  DB::raw('ROUND(SUM(amount), 2) as amt'),
                   'transactionID'
                );
      if ($this->year) {
          $transactions->whereYear('transactionDate', $this->year);
      }
      if ($this->month) {
          $transactions->whereMonth('transactionDate', $this->month);
      }
      $transactions->whereNotIn('category', ['Card-Payment', 'Payroll']);

      $transactions = $transactions->groupBy('transactionID')->orderBy('transactionID')->get();
      $trnx = [];
      foreach($transactions as $t){
        $trnx[$t->transactionID] =   $t->amt;
      }
      return $trnx;
    }

    public function getMonthSpendingOverallCatgory()
    {
      $transactions = DB::table('transactions')
              ->select(
                  DB::raw('ROUND(SUM(amount), 2) as amt'),
                   'category'
                );
      if ($this->year) {
          $transactions->whereYear('transactionDate', $this->year);
      }
      if ($this->month) {
          $transactions->whereMonth('transactionDate', $this->month);
      }
      $transactions->whereNotIn('category', ['Card-Payment', 'Payroll', 'Interest']);

      $transactions = $transactions->groupBy('category')->orderBy('category')->get();
      $trnx = [];
      foreach($transactions as $t){
        $trnx[$t->category] =   $t->amt;
      }
      return $trnx;
    }

    public function getMonthSpendingOverallSubCatgory()
    {
      $transactions = DB::table('transactions')
              ->select(
                  DB::raw('ROUND(SUM(amount), 2) as amt'),
                   'subCategory'
                );
      if ($this->year) {
          $transactions->whereYear('transactionDate', $this->year);
      }
      if ($this->month) {
          $transactions->whereMonth('transactionDate', $this->month);
      }
      $transactions->whereNotIn('category', ['Card-Payment', 'Payroll', 'Interest']);

      $transactions = $transactions->groupBy('subCategory')->orderBy('subCategory')->get();
      $trnx = [];
      foreach($transactions as $t){
        $trnx[$t->subCategory] =   $t->amt;
      }
      return $trnx;
    }


    public function getMonthSpendingByCategory()
    {
        $category=  $this->getCategoriesFilter();
        $transactions = DB::table('transactions')
                ->select(
                    DB::raw('ROUND(SUM(amount), 2) as amt'),
                    DB::raw('DATE_FORMAT(transactionDate, "%m/%d") as tdate'),
                    'transactionDate',
                    'category'
                );
        if ($this->year) {
            $transactions->whereYear('transactionDate', $this->year);
        }
        if ($this->month) {
            $transactions->whereMonth('transactionDate', $this->month);
        }
        if ($this->cat) {
            $transactions->where('category', $this->cat, '=');
        }
        if ($this->subcat) {
            $transactions->where('subCategory', $this->subcat, '=');
        }
        $transactions->whereNotIn('category', ['Card-Payment', 'Payroll', 'Interest']);

        $transactions = $transactions->groupBy('category', 'transactionDate')->orderBy('transactionDate')->get()->toArray();
        $data =[];
        $labels =[];
        foreach ($transactions as $t) {
            $t = (array) $t;
            $cat = Arr::get($t, 'category', '');
            $transactionDate = Arr::get($t, 'tdate', '');
            $labels[$transactionDate] = $transactionDate;
            foreach ($category as $c) {
                if ($cat == $c) {
                    $data[$c][] = [ 'x' => $transactionDate, 'y' => Arr::get($t, 'amt', 0)];
                } else {
                    $data[$c][] = [ 'x' => $transactionDate, 'y' => 0];
                }
            }
        }
        $series=[];
        foreach ($data as $d => $v) {
            $series[] = ['label' => $d, 'data' => $v];
        }
      //  print_r(json_encode($series));
        return array('series' => $series, 'labels' => array_values($labels));
    }
}
