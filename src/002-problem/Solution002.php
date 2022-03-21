<?php

namespace Exercice002;

class Solution002
{
    public static function SumEvenValueFibonacciSequence($number,$previousNumber,$limit)
    {
        $sumFibonacci = 0;

        if($number == 0){
            $fibonacciNumber = 1;
            return $sumFibonacci + Solution002::SumEvenValueFibonacciSequence($fibonacciNumber,$fibonacciNumber,$limit);
        }
        
        $fibonacciNumber = $number + $previousNumber;

        if ($fibonacciNumber > $limit){
            return 0;
        }

        if ($fibonacciNumber % 2 == 0){
            $sumFibonacci = $fibonacciNumber;    
        }

        return $sumFibonacci + Solution002::SumEvenValueFibonacciSequence($fibonacciNumber,$number,$limit);
    }
}