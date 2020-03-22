<?php

namespace App\Classes;

use App\Models\Pattern;
use Illuminate\Support\Arr;

class PncPatternFinder
{
    public static $patterns = null;

    public static $thisInstance = null;

    public static $categories =  [
      'Card-Payment' => 'Card-Payment',
      'Interest' => 'Interest',
      'Merchandise' => 'Merchandise',
      'Payment' => 'Payment',
      'Payroll' => 'Payroll',
      'Purchase' => 'Purchase',
      'Withdrawal' => 'Withdrawal'
    ];

    public static $subcategories =  [
      'ATM' => 'ATM',
      'Card' => 'Card',
      'Debit Card Purchase' => 'Debit Card Purchase',
      'Discover' => 'Discover' ,
      'e-shopping' => 'e-shopping',
      'Entertainment' => 'Entertainment',
      'GEICO' => 'GEICO',
      'Grocery' => 'Grocery',
      'House-Rent' => 'House-Rent',
      'Internet' => 'Internet' ,
      'Jerseystrong'=> 'Jerseystrong',
      'Parking' => 'Parking',
      'Personal Care' => 'Personal Care',
      'phone' => 'phone',
      'PNC'=> 'PNC',
      'PSEG' => 'PSEG',
      'Restaurants' => 'Restaurants',
      'SLASHSUPPORT' => 'SLASHSUPPORT',
      'HouseHold' =>'HouseHold' ,
      'Transport' => 'Transport',
    ];



    public static function getInstance()
    {
        if (!PncPatternFinder::$thisInstance) {
            PncPatternFinder::$thisInstance = new PncPatternFinder();
        }
        return PncPatternFinder::$thisInstance;
    }

    public function __construct()
    {
        PncPatternFinder::getPatterns();
    }

    public static function getPatterns()
    {
        if (!PncPatternFinder::$patterns) {
            $patterns = new Pattern();
            $patterns = $patterns->get();
            foreach ($patterns as $pattern) {
                $p[] =  $pattern->toArray();
            }
            if (count($p) > 0) {
                PncPatternFinder::$patterns = $p;
            }
        }
        return PncPatternFinder::$patterns;
    }

    public function parsePattern($description = null)
    {
        if (!$description && empty($description)) {
            return null;
        }
        if (!PncPatternFinder::$patterns) {
            PncPatternFinder::getPatterns();
        }
        $match = [];
        foreach (PncPatternFinder::$patterns as $pattern) {
            $regex = Arr::get($pattern, 'pattern', '');
            if (stristr($description, $regex)) {
                $match['isFound'] =  true;
                $match['transactionType'] = Arr::get($pattern, 'transactionType', 'CREDIT');
                $match['transactionStatus'] = Arr::get($pattern, 'transactionStatus', 'COMPLETED');
                $match['category'] = Arr::get($pattern, 'category', null);
                $match['subCategory'] = Arr::get($pattern, 'subCategory', null);
                return $match;
            }
        }
        $match['isFound'] =  false;
        return $match;
    }
}
