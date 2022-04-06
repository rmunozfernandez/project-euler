<?php

use Exercice001\Solution001;
use Exercice002\Solution002;
use Exercice003\Solution003;
use Exercice004\Solution004;
use Exercice005\Solution005;
use Exercice006\Solution006;
use Exercice007\Solution007;
use Exercice008\Solution008;
use Exercice009\Solution009;

function MultiplesOfThreeOrFive($limit){
    return Solution001::MultiplesOfThreeOrFive($limit);
}

function SumEvenValueFibonacciSequence($fibonacciNumber,$number,$limit){
    return Solution002::SumEvenValueFibonacciSequence($fibonacciNumber,$number,$limit);
}

function LargestPrimeFactor($number){
    return Solution003::LargestPrimeFactor($number);
}

function NextPrimeNumber($number){
    return Solution003::NextPrimeNumber($number);
}

function LargestPalindromeProduct($number){
    return Solution004::LargestPalindromeProduct($number);
}

function SmallestMultiple($maxNumber){
    return Solution005::SmallestMultiple($maxNumber);
}

function SumSquareDifference($maxNumber){
    return Solution006::SumSquareDifference($maxNumber);
}

function Prime10001st(){
    return Solution007::Prime10001st();
}

function LargestProductInASeries( $maxNumber )
{
    $largestProductInASeries = new Solution008;
    return $largestProductInASeries->LargestProductInASeries( $maxNumber );
}

function SpecialPythagoreanTriplet()
{
    return Solution009::SpecialPythagoreanTriplet();
}