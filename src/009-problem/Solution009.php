<?php

namespace Exercice009;

class Solution009
{
    public static function SpecialPythagoreanTriplet( $limit )
    {
        $a = 2;
        $b = 3;

        while ( $a < $limit )
        {
            $c = $limit - $a - $b;

            if ( pow( $a, 2) + pow( $b, 2) == pow( $c, 2))
            {
                return $a * $b * $c;
            }

            ++$b;

            if ( $b >= $c )
            {
                ++$a;
                $b = $a + 1;
            }

            if ( $a >= $b )
            {
                return 0;
            }
        }

    }
}