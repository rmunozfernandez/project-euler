<?php

namespace Exercice011;

class Solution011
{
    static $grid = array(
        array(8, 2, 22, 97, 38, 15, 0, 40, 0, 75, 4, 5, 7, 78, 52, 12, 50, 77, 91, 8),
        array(49, 49, 99, 40, 17, 81, 18, 57, 60, 87, 17, 40, 98, 43, 69, 48, 04, 56, 62, 00),
        array(81, 49, 31, 73, 55, 79, 14, 29, 93, 71, 40, 67, 53, 88, 30, 03, 49, 13, 36, 65),
        array(52, 70, 95, 23, 04, 60, 11, 42, 69, 24, 68, 56, 01, 32, 56, 71, 37, 02, 36, 91),
        array(22, 31, 16, 71, 51, 67, 63, 89, 41, 92, 36, 54, 22, 40, 40, 28, 66, 33, 13, 80),
        array(24, 47, 32, 60, 99, 03, 45, 02, 44, 75, 33, 53, 78, 36, 84, 20, 35, 17, 12, 50),
        array(32, 98, 81, 28, 64, 23, 67, 10, 26, 38, 40, 67, 59, 54, 70, 66, 18, 38, 64, 70),
        array(67, 26, 20, 68, 2, 62, 12, 20, 95, 63, 94, 39, 63, 8, 40, 91, 66, 49, 94, 21),
        array(24, 55, 58, 05, 66, 73, 99, 26, 97, 17, 78, 78, 96, 83, 14, 88, 34, 89, 63, 72),
        array(21, 36, 23, 9, 75, 0, 76, 44, 20, 45, 35, 14, 0, 61, 33, 97, 34, 31, 33, 95),
        array(78, 17, 53, 28, 22, 75, 31, 67, 15, 94, 3, 80, 4, 62, 16, 14, 9, 53, 56, 92),
        array(16, 39, 05, 42, 96, 35, 31, 47, 55, 58, 88, 24, 00, 17, 54, 24, 36, 29, 85, 57),
        array(86, 56, 00, 48, 35, 71, 89, 07, 05, 44, 44, 37, 44, 60, 21, 58, 51, 54, 17, 58),
        array(19, 80, 81, 68, 05, 94, 47, 69, 28, 73, 92, 13, 86, 52, 17, 77, 04, 89, 55, 40),
        array(04, 52, 8, 83, 97, 35, 99, 16, 7, 97, 57, 32, 16, 26, 26, 79, 33, 27, 98, 66),
        array(88, 36, 68, 87, 57, 62, 20, 72, 03, 46, 33, 67, 46, 55, 12, 32, 63, 93, 53, 69),
        array(4, 42, 16, 73, 38, 25, 39, 11, 24, 94, 72, 18, 8, 46, 29, 32, 40, 62, 76, 36),
        array(20, 69, 36, 41, 72, 30, 23, 88, 34, 62, 99, 69, 82, 67, 59, 85, 74, 04, 36, 16),
        array(20, 73, 35, 29, 78, 31, 90, 01, 74, 31, 49, 71, 48, 86, 81, 16, 23, 57, 05, 54),
        array(01, 70, 54, 71, 83, 51, 54, 69, 16, 92, 33, 48, 61, 43, 52, 01, 89, 19, 67, 48)
    );

    static $limit = 20;

    public static function LargestProductInAGrid()
    {
        $largestProduct = 0;

        $largestProduct = max( $largestProduct, self::HorizontalProduct() );
        $largestProduct = max( $largestProduct, self::VerticalProduct() );
        $largestProduct = max( $largestProduct, self::DiagonalProduct() );
        $largestProduct = max( $largestProduct, self::BackDiagonalProduct() );

        return $largestProduct;
    }

    protected static function HorizontalProduct()
    {
        $x = 0;
        $maxProduct = 0;

        while ( $x < self::$limit ) 
        {
            $product = 1;

            $y = 0;
            $limitY = $y + 4;
            while ( $y < $limitY && $y < self::$limit )
            {
                $product *= self::$grid[$x][$y];
                ++$y;

                if ( $y == $limitY )
                {
                    $y = $limitY - 4 + 1;
                    ++$limitY;

                    $maxProduct = max( $maxProduct, $product );
                    $product = 1;
                }
            }

            ++$x;
        }
        
        return $maxProduct;
    }

    protected static function VerticalProduct()
    {        
        $y = 0;
        $maxProduct = 0;

        while ( $y < self::$limit ) 
        {
            $product = 1;

            $x = 0;
            $limitX = $x + 4;
            while ( $x < $limitX && $x < self::$limit )
            {
                $product *= self::$grid[$x][$y];
                ++$x;

                if ( $x == $limitX )
                {
                    $x = $limitX - 4 + 1;
                    ++$limitX;

                    $maxProduct = max( $maxProduct, $product );
                    $product = 1;
                }
            }

            ++$y;
        }
        
        return $maxProduct;
    }

    protected static function DiagonalProduct()
    {
        $x = 0;
        
        $maxProduct = 0;
        $product = 1;

        while ( $x <= self::$limit - 4)
        {
            $y = 0; 
            $x2 = $x;
            $y2 = $y;
            $limitX = $x + 4;

            while ( $y <= self::$limit - 4 )
            {
                $product *= self::$grid[$x2][$y2];
                ++$x2;
                ++$y2;

                if ( $x2 == $limitX )
                {
                    $maxProduct = max( $maxProduct, $product );
                    $product = 1;
                    $x2 = $x;
                    ++$y;
                    $y2 = $y;
                }
            }
            ++$x;
        }

        return $maxProduct;

    }

    protected static function BackdiagonalProduct()
    {
        $x = 3;
        $maxProduct = 0;
        $product = 1;

        while ( $x < self::$limit )
        {
            $y = 0;
            $x2 = $x;
            $y2 = $y;
            $limitY = $y + 4;

            while ( $y <= self::$limit - 4 )
            {
                $product *= self::$grid[$x2][$y2];

                --$x2;
                ++$y2;

                if ( $y2 == $limitY )
                {
                    $maxProduct = max( $maxProduct, $product );
                    $product = 1;
                    $x2 = $x;
                    ++$y;
                    ++$limitY;
                    $y2 = $y; 
                }
            }

            ++$x;
        }

        return $maxProduct;
    }
}