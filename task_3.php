<?php

$grades = [85, 92, 78, 88, 95];

function myGrades($grades){
    rsort($grades);
    print_r($grades);

}
myGrades($grades);



echo "\n Another way \n";
// 2nd way i tried! 

$grades2 = [85, 92, 78, 88, 95];
function myGrades2($grades2){
    rsort($grades2);
    $arrlength = count($grades2);
    
    for($x = 0; $x < $arrlength; $x++) {
        echo $grades2[$x] . "\n";
        
    }
}
myGrades2($grades2);

