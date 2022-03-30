<?php

namespace Exercice005;

class Solution005{
    public static function SmallestMultiple($maxNumber)
    {
        
        $numbers = [];
        $mcm = [];
        $index = $maxNumber;
        
        while ( $index > 0 )
        {
            $numbers[$index] = $index;
            --$index;
        }

        $finish = false;

        $primeNumber = 2;
        while ( !$finish )
        {
            $located = false;
            $finish = true;

            foreach ( $numbers as $num )
            {
                if ( $num % $primeNumber == 0 )
                {
                    $located = true;
                }

                if ( $num > 1 )
                {
                    $finish = false;
                }
            }

            if ( $located )
            {
                $mcm[] = $primeNumber;
                $i = 1;
                while ( $i <= $maxNumber ){
                    if ( $numbers[$i] % $primeNumber == 0 ){
                        $numbers[$i] = $numbers[$i] / $primeNumber;
                    }                    
                    ++$i;
                }
            }

            if ( !$located )
            {
                $primeNumber = NextPrimeNumber($primeNumber);            
            }
        }

        $product = 1;

        foreach ( $mcm as $factor)
        {
            $product *= $factor;
        }

        return $product;
    }
}