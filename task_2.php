<?php

$numbers = array(1,2,3,4,5,6,7,8,9,10);

function odd($n){
    return $n%2==1;
}

$newArray = array_filter($numbers, 'odd');
print_r($newArray);