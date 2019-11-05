<?php

namespace App\Http\Controllers;

use App\Experience;
use App\Project;
use App\Reference;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CareerController extends Controller
{

    public function test(Request $request)
    {
       $arr =  [11,4,7,22,12,3,1,5];

       $arr = $this->merge2($arr);

       dd($arr);
    }


    public function merge2($arr) {

        $n = count($arr);

        if ($n === 1) {
            return $arr;
        }

        $half = array_splice($arr, (int) $n / 2);

        $result = [];

        $arr = $this->merge2($arr);
        $half = $this->merge2($half);

        while (count($arr) > 0 || count($half) > 0) {

            if (count($arr) === 0 || count($half) === 0) {
                $result[] = (count($arr) === 0) ? array_shift($half):array_shift($arr);
            } else {
                $result[] = ($arr[0] > $half[0]) ? array_shift($half):array_shift($arr);
            }
        }
        return $result;

    }


    public function test2(string $s)
    {

    }

    public function test3(Request $request)
    {
        //
    }

    public function test4(Request $request)
    {
        //
    }

    public function bubbleSort(&$arr)
    {
        /*
            ========================================================
            Bubble Sort Explanation
            ========================================================
            Bubble Sort
            Bubble Sort is the simplest sorting algorithm that works by repeatedly swapping the
            adjacent elements if they are in wrong order.

            Example:
            First Pass:
            ( 5 1 4 2 8 ) –> ( 1 5 4 2 8 ), Here, algorithm compares the first two elements, and swaps since 5 > 1.
            ( 1 5 4 2 8 ) –>  ( 1 4 5 2 8 ), Swap since 5 > 4
            ( 1 4 5 2 8 ) –>  ( 1 4 2 5 8 ), Swap since 5 > 2
            ( 1 4 2 5 8 ) –> ( 1 4 2 5 8 ), Now, since these elements are already in order (8 > 5), algorithm does not swap them.

            Second Pass:
            ( 1 4 2 5 8 ) –> ( 1 4 2 5 8 )
            ( 1 4 2 5 8 ) –> ( 1 2 4 5 8 ), Swap since 4 > 2
            ( 1 2 4 5 8 ) –> ( 1 2 4 5 8 )
            ( 1 2 4 5 8 ) –>  ( 1 2 4 5 8 )
            Now, the array is already sorted, but our algorithm does not know if it is completed. The algorithm needs one whole pass without any swap to know it is sorted.

            Third Pass:
            ( 1 2 4 5 8 ) –> ( 1 2 4 5 8 )
            ( 1 2 4 5 8 ) –> ( 1 2 4 5 8 )
            ( 1 2 4 5 8 ) –> ( 1 2 4 5 8 )
            ( 1 2 4 5 8 ) –> ( 1 2 4 5 8 )

            ========================================================
            Implementation Notes
            ========================================================

            Nested For-Loops
            No recursion so no check for n == 1
            Outer < sizeof($arr);
            Inner < sizeof($arr) - OuterIndex - 1
        */

        $n = count($arr);

        // Traverse through all array elements
        for($i = 0; $i < $n; $i++) {
            // Last i elements are already in place
            for ($j = 0; $j < $n - $i - 1; $j++) {
                // traverse the array from 0 to n-i-1
                // Swap if the element found is greater
                // than the next element
                if ($arr[$j] > $arr[$j+1]) {
                    $t = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $t;
                }
            }
        }
    }

    public function mergeSort(array &$arr)
    {
        // Divide and conquer style
        // Find middle of array, split it in half
        // while both arrays are not empty
        //
        // O(n log n) n is size of array

        if (count($arr) === 1) {
            return;
        }

        $middle = (int) count($arr) / 2;
        $otherHalf = array_splice($arr, $middle);

        $this->mergeSort($arr);
        $this->mergeSort($otherHalf);

        $result = [];

        while(!empty($arr) || !empty($otherHalf)) {
            if (empty($arr) || empty($otherHalf)) {
                $result[] = empty($arr) ? array_shift($otherHalf):array_shift($arr);
            } else {
                $result[] = $arr[0] > $otherHalf[0] ? array_shift($otherHalf):array_shift($arr);
            }
        }

        $arr = $result;
    }

    public function quickSort(&$arr)
    {
        // Divide and Conquer
        // Pivot is first element, Pivot key is key of first element
        // Compare every value to pivot
        // if val is loe to pivot, add to loe result
        // else if val is gt pivot, add to gt result
        // O (n log n)

        if(count($arr) < 2) {
            return $arr;
        }

        $loe = $gt = array();

        $pivotKey = key($arr);
        $pivot = array_shift($arr);

        foreach($arr as $val) {
            if ($val <= $pivot) {
                $loe[] = $val;
            } elseif ($val > $pivot) {
                $gt[] = $val;
            }
        }

        $this->quickSort($loe);
        $this->quickSort($gt);

        $arr = array_merge($loe,[$pivotKey => $pivot],$gt);
    }

    /**
     * @param Integer[][] $A
     * @return Integer[][]
     */
    function flipAndInvertImage($a) {
        /*
           $a = [
                [1,1,0],
                [1,0,1],
                [0,0,0]
            ];

            $this->flipAndInvertImage($a);
         */

        $flip = function(&$row) {
            $row = array_reverse($row);
        };

        $invertCol = function(&$col) {
            $col = ((int) $col === 0) ? 1 : 0;
        };

        $invertRow = function(&$row) use ($invertCol) {
            array_walk($row, $invertCol);
        };

        array_walk($a, $flip);
        array_walk($a, $invertRow);

        return $a;
    }

    public function intersectDedupedArray(...$arrays)
    {
        return array_unique(array_intersect(...$arrays));
    }

    public function longestPrefix(array $strings)
    {
        // test case ['abcdef', 'abc123', 'abcthe'];
        // returns 'abc'

        if (!$strings) {
            return '';
        }

        $prefix = array_shift($strings);
        $length = strlen($prefix);
        foreach ($strings as $currentString) {
            while ($length > 0 && substr($currentString, 0, $length) !== $prefix) {
                $length--;
                $prefix = substr($prefix, 0, -1);
            }
            if ($length === 0) {
                break;
            }
        }

        return $prefix;
    }


    public function checkPalindrome(string $s) : boolean
    {
        $stringArray = str_split($s);
        $list = [];

        for ($i = 0; $i < strlen($s); $i++){

            $key = array_search($stringArray[$i], $list);

            if ($key !== false) {
                unset($list[$key]);
            } else {
                $list[] = $stringArray[$i];
            }
        }

        if ((strlen($s) % 2 == 0 && count($list) == 0) || (strlen($s) % 2 == 1 && count($list) == 1)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {

        /*
            Given an array of integers, return indices of the two numbers such that they add up to a specific target.

            You may assume that each input would have exactly one solution, and you may not use the same element twice.

            Example:

            Given nums = [2, 7, 11, 15], target = 9,

            Because nums[0] + nums[1] = 2 + 7 = 9,
            return [0, 1].
         */

        $map = [];

        for ($i=0; $i < count($nums); $i++) {
            $complement = $target - $nums[$i];
            $key = array_search($complement, $map);

            if ($key !== false) {
                return [$key, $i];
            }

            $map[$i] = $nums[$i];
        }

        throw new Exception("No Two Sum");
    }

    function selfDividingNumbers($left, $right) {

        // check if a number is divisible by all of its digits

        $result = [];

        $checkDivisibility = function($total) {
            $digits = str_split($total);
            foreach($digits as $digit) {
                if ($digit == 0 || $total % $digit != 0) {
                    return false;
                }
            }
            return true;
        };

        for ($i = $left; $i <= $right; $i++) {
            if ($checkDivisibility($i)) {
                $result[] = $i;
            }
        }

        return $result;
    }


    public function stockPrice(array $prices) : float
    {
        // aka max differential

        // given an array of numbers, aka stock prices
        // find when its best to buy and sell on and find differential

        // this is one buy, one sell

        // test case [6,0,-1,10];
        // should return 11

        $arr_size = count($prices);
        $max_diff = $prices[1] - $prices[0];

        for ($i = 0; $i < $arr_size; $i++) {
            for ($j = $i+1; $j < $arr_size; $j++) {
                if ($prices[$j] - $prices[$i] > $max_diff)
                    $max_diff = $prices[$j] - $prices[$i];
            }
        }
        return $max_diff;
    }

    public function advancedStock($prices)
    {

        // Best Time to Buy and Sell Stock with Cooldown
        /*
            Say you have an array for which the ith element is the price of a given stock on day i.

            Design an algorithm to find the maximum profit. You may complete as many transactions as you like (ie, buy one and sell one share of the stock multiple times) with the following restrictions:

            You may not engage in multiple transactions at the same time (ie, you must sell the stock before you buy again).
            After you sell your stock, you cannot buy stock on next day. (ie, cooldown 1 day)
            Example:

            Input: [1,2,3,0,2]
            Output: 3
            Explanation: transactions = [buy, sell, cooldown, buy, sell]
         */

        $length = count($prices);

        if ($length <= 1) {
            return 0;
        }

        $matrix = array_fill(0, $length, array_fill(0, $length, 0));

        $handleBuyRowAndSellCol = function ($num) {
            return $num > 0 ? $num : 0;
        };

        for ($i=0; $i < $length; $i++){
            $priceOnTheBegin = $prices[$i];

            for ($j = $i; $j < $length; $j++){
                $priceOnTheDate = $prices[$j];
                $today = $handleBuyRowAndSellCol($priceOnTheDate - $priceOnTheBegin);
                if ($i === 0){
                    $matrix[$i][$j] = $today;
                } else {
                    $up = $matrix[$i-1][$j];
                    $left = $matrix[$i][$j-1];
                    $maxUpAndLeft = max($up, $left);

                    $twoDaysAgoMax = $i > 2 ? $matrix[$i-2][$i-2] : 0;
                    $twoDaysBeforePlusToday = $twoDaysAgoMax + $today;
                    $matrix[$i][$j] = max($maxUpAndLeft, $twoDaysBeforePlusToday);
                }
            }
        }
        return $matrix[$length-1][$length-1];
    }

    public function lengthOfLongestSubstringWithoutRepeatingCharacters(string $s)
    {
        $test1 = 'pwwkew';
        $test2 = "abcabcbb";
        $test3 = "bbbbbbb";

        $map = [];
        $start = 0;
        $maxLen = 0;
        $arr = str_split($s);

        for ($i=0; $i < strlen($s); $i++) {
            $current = $map[$arr[$i]] ?? null;
            if ($current !== null && $start <= $current) {
                $start = $current + 1;
            } else {
                $maxLen = max($maxLen, $i - $start + 1);
            }

            $map[$arr[$i]] = $i;
        }

        return $maxLen;
    }

    function matrixChainOrder(&$p, $i, $j)
    {
        // Matrix Ai has dimension
        // p[i-1] x p[i] for i = 1..n

        if($i == $j)
            return 0;

        $min = PHP_INT_MAX;

        // place parenthesis at different places
        // between first and last matrix, recursively
        // calculate count of multiplications for
        // each parenthesis placement and return
        // the minimum count
        for ($k = $i; $k < $j; $k++)
        {
            $count = $this->matrixChainOrder($p, $i, $k) +
                $this->matrixChainOrder($p, $k + 1, $j) +
                $p[$i - 1] *
                $p[$k] * $p[$j];

            if ($count < $min)
                $min = $count;
        }

        // Return minimum count
        return $min;
    }

    public function matrixTest(Request $request)
    {
        $arr = [1, 2, 3, 4, 3];
        $n = count($arr);

        echo "Minimum number of multiplications is " .
            $this->matrixChainOrder($arr, 1, $n - 1);
    }

    function is_anagram($string_1, $string_2)
    {
        // using count_carts with 1 as the MODE_PARAM,
        // where keys are ASCII values and corresponding values will be the number of occurrences of that ASCII value.
        // The array possess only those keys as ASCII values whose frequency is more than 0.

        if (count_chars($string_1, 1) == count_chars($string_2, 1))
            return 'yes';
        else
            return 'no';
    }


   public function evaluateExpression($exp)
   {
      $chars = str_split($exp);
      $currentNumber = '';
      $operations = [];
      $numbers = [];

     foreach($chars as $char) {
        if (is_numeric($char)) {
            $currentNumber .= $char;
        } else {
          $operations[] = $char;
          $numbers[] = $currentNumber;
          $currentNumber = '';
        }
     }

     if (strlen($currentNumber) > 0) {
       $numbers[] = $currentNumber;
     }

     var_dump($numbers, $operations);

     $solution = $numbers[0];
     array_shift($numbers);

     foreach($numbers as $index=> $number) {
       switch($operations[$index]) {
         case "+":
           $solution += $number;
           break;
         case "-":
           $solution -= $number;
         case "(":
           $expression = '';
           $solution += evaluateExpression();

           break;

       }
      if ($operations[$index] == "+") {

      } elseif ($operations[$index] == "-") {
        $solution -= $number;
        }
     }

     return (int) $solution;
   }
}

