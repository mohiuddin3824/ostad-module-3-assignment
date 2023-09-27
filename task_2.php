<?php
/*
// Numbers array 
$numbers = array(1,2,3,4,5,6,7,8,9,10);

function oddCmp($numbers){

    return ($numbers & 1);
}
  
$even = array_filter($numbers, "oddCmp");
 
print"\n Remove Even Numbers :\n";

print_r($even);

*/ // It is also working

$numbers = [1,2,3,4,5,6,7,8,9,10];

function oddCmp($numbers){

    $oddNums = array_filter($numbers, fn($n) => $n % 2 !==0 );
    return $oddNums;
}
 print_r(oddCmp($numbers));





