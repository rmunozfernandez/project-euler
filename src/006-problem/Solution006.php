<?php

namespace Exercice006;

class Solution006{
    public static function SumSquareDifference($maxNumber){
        $index = 1;
        $sumOfTheSquares = 0;
        $squareOfTheSum = 0;
        while ( $index <= $maxNumber)
        {
            $sumOfTheSquares += pow( $index, 2);

            $squareOfTheSum += $index;

            ++$index;
        }
        unset($index);

        $squareOfTheSum = pow( $squareOfTheSum, 2 );

        return $squareOfTheSum - $sumOfTheSquares;
    }
}