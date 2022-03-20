<?php

function SumEvenValueFibonacciSequence($number,$previousNumber,$limit)
{
    $sumFibonacci = 0;

    if($number == 0){
        $fibonacciNumber = 1;
        return $sumFibonacci + SumEvenValueFibonacciSequence($fibonacciNumber,$fibonacciNumber,$limit);
    }
    
    $fibonacciNumber = $number + $previousNumber;

    if ($fibonacciNumber > $limit){
        return 0;
    }

    if ($fibonacciNumber % 2 == 0){
        $sumFibonacci = $fibonacciNumber;    
    }

    return $sumFibonacci + SumEvenValueFibonacciSequence($fibonacciNumber,$number,$limit);
}

echo SumEvenValueFibonacciSequence(0,0,4000000);