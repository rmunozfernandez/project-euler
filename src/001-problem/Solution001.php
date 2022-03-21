<?php

namespace Exercice001;

class Solution001{
    
    public static function MultiplesOfThreeOrFive($limit){
        $naturalNumber = 1;
        $sum = 0;
        while ($naturalNumber < $limit){
            if ($naturalNumber % 3 == 0 || $naturalNumber % 5 == 0){
                $sum = $sum + $naturalNumber;
            }
            ++$naturalNumber;
        }
    
        return $sum;
    }
}