<?php

namespace Exercice004;

class Solution004
{
    public static function LargestPalindromeProduct($numberOfDigits)
    {
        $factor1 = (1 * pow(10, $numberOfDigits)) - 1;
        $factor2 = (1 * pow(10, $numberOfDigits)) - 1;
        $limit = ( (1 * pow(10, $numberOfDigits)) / 100 ) * 85;
        $largestPalindromeProduct = 0;

        while( $factor1 > $limit )
        {
            while( $factor2 > $limit )
            {
                if( self::IsPalindrome($factor1 * $factor2) > $largestPalindromeProduct)
                {
                    $largestPalindromeProduct = $factor1 * $factor2;
                }
                --$factor2;
            }
            --$factor1;
            $factor2 = $factor1;
        }

        return $largestPalindromeProduct;
    }

    public static function IsPalindrome($number)
    {
        $numberInString = strval($number);
        $stringLength = strlen($numberInString);
        $index = 0;
        
        while( $index < $stringLength )
        {
            if( $numberInString[$index] != $numberInString[$stringLength-1])
            {
                return false;
            }
            ++$index;
            --$stringLength;
        }

        return true;
    }
}