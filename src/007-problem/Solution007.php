<?php

namespace Exercice007;

class Solution007{
    public static function Prime10001st()
    {
        $primeNumber = 2;
        $index = 1;
        while ($index < 10001)
        {
            $primeNumber = NextPrimeNumber($primeNumber);
            ++$index;
        }
        return $primeNumber;
    } 
}