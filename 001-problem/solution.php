<?php

$naturalNumber = 1;
$sum = 0;

while ($naturalNumber < 1000){
    if ($naturalNumber % 3 == 0 || $naturalNumber % 5 == 0){
        $sum = $sum + $naturalNumber;
    }
    ++$naturalNumber;
}

echo $sum;