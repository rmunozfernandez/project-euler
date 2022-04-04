<?php

namespace Exercice008;

class Solution008
{
    public string $serie;
    public $array;

    public function __construct(){
        $this->serie = '73167176531330624919225119674426574742355349194934';
        $this->serie .= '96983520312774506326239578318016984801869478851843';
        $this->serie .= '85861560789112949495459501737958331952853208805511';
        $this->serie .= '12540698747158523863050715693290963295227443043557';
        $this->serie .= '66896648950445244523161731856403098711121722383113';
        $this->serie .= '62229893423380308135336276614282806444486645238749';
        $this->serie .= '30358907296290491560440772390713810515859307960866';
        $this->serie .= '70172427121883998797908792274921901699720888093776';
        $this->serie .= '65727333001053367881220235421809751254540594752243';
        $this->serie .= '52584907711670556013604839586446706324415722155397';
        $this->serie .= '53697817977846174064955149290862569321978468622482';
        $this->serie .= '83972241375657056057490261407972968652414535100474';
        $this->serie .= '82166370484403199890008895243450658541227588666881';
        $this->serie .= '16427171479924442928230863465674813919123162824586';
        $this->serie .= '17866458359124566529476545682848912883142607690042';
        $this->serie .= '24219022671055626321111109370544217506941658960408';
        $this->serie .= '07198403850962455444362981230987879927244284909188';
        $this->serie .= '84580156166097919133875499200524063689912560717606';
        $this->serie .= '05886116467109405077541002256983155200055935729725';
        $this->serie .= '71636269561882670428252483600823257530420752963450';

        $index = 0;

        $this->array = str_split($this->serie);

        $index = 0;

        foreach ( $this->array as $number )
        {
            $this->array[$index] = intval($number);
            ++$index;
        }
    }
    
    public function LargestProductInASeries( $adjacentDigits )
    {
        $index = 0;
        $product = 0;
        $finalProduct = 0;

        $limit = count($this->array);

        while ( $index < $limit - $adjacentDigits )
        {
            $product = self::MultiplyFollowingNumbersInTheSeries($index, $index + $adjacentDigits - 1 );

            if ( $product > $finalProduct )
            {
                $finalProduct = $product;
            }

            ++$index;
        }        
        unset( $index );
        unset( $limit );

        return $finalProduct;
    }

    public function MultiplyFollowingNumbersInTheSeries( $from, $finalPosition )
    {
        if ( $from > $finalPosition )
        {
            return 1;
        }
        
        return $this->array[$from] * self::MultiplyFollowingNumbersInTheSeries( $from + 1, $finalPosition );
    }
}