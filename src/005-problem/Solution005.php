<?php

namespace Exercice005;

class Solution005{
    public static function SmallestMultiple($maxNumber)
    {
        $smallestMultiple = 2;

        if ( $maxNumber <= 1 )
        {
            return 1;
        }
        
        do
        {
            $divider = $maxNumber;
            do
            {
                if ( $smallestMultiple % $divider != 0 )
                {
                    break;
                }

                if ( $divider == 1 )
                {
                    return $smallestMultiple;
                }
            } while ( --$divider );
            
        } while ( $smallestMultiple = 2 + $smallestMultiple );
    }
}