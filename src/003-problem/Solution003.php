<?php

namespace Exercice003;

class Solution003{
    public static function LargestPrimeFactor($number)
    {
        $primeNumber = 2;
        $quotient = $number;
        $largestPrimeNumber = 1;

        while ($quotient >= $primeNumber)
        {
            if( $quotient % $primeNumber == 0)
            {
                $quotient /= $primeNumber;
                $largestPrimeNumber = $primeNumber;
                continue;
            }
            $primeNumber = self::NextPrimeNumber($primeNumber);
        }

        return $largestPrimeNumber;
    }

    public static function NextPrimeNumber($number)
    {
        do {
            ++$number;
        } while (!self::IsPrime($number));
        
        return $number;
    }

    public static function IsPrime($number)
    {
        $i = 2;
 
        if ($number == 2) {
            return true;
        }
    
        while ($i <= sqrt($number)) {
            if ($number % $i == 0) {
                return false;
            }
            $i++;
        }
    
        return true;
    }
}