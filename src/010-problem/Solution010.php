<?php

namespace Exercice010;

class Solution010
{
    public static function SummationOfPrimes( $limit )
    {
        $number = 2;
        $summation = 0;
        do
        {
            $summation += $number;
            $number = NextPrimeNumber( $number );
            
            echo $number . ' ' . $summation . "\n";
        } while ( $number <= $limit );

        return $summation;
    }
}