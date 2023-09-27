<?php

$studentGrades = [
    
    "jamal" => [
        "Math" => 80,
        "English" => 75,
        "Science" => 70,
    ],
    
    "Kamal" => [
        "Math" => 60,
        "English" => 75,
        "Science" => 50,
    ],

    "Salman" => [
        "Math" => 89,
        "English" => 65,
        "Science" => 70,
    ]
    
    

];


function studentData($studentGrades){
    
    echo $studentGrades["jamal"];
    
}

echo studentData($studentGrades);

/*
$total_mark = $bangla + $english + $math;

    $grade = $total_mark / 3;

    if ($grade>=70) {
        echo "<span class=\"grade\"> Your Grade <br> A </span>";
        echo "<span class=\"point\"> Your Point <br> 4.00 </span>";
        
    }elseif($grade>=50 && $grade<59){
        echo "<span class=\"grade\"> Your Grade <br> B </span>";
        echo "<span class=\"point\"> Your Point <br> 3.00 </span>";
        
    }elseif($grade>=40 && $grade<49){
        echo "<span class=\"grade\"> Your Grade <br> C </span>";
        echo "<span class=\"point\"> Your Point <br> 2.00 </span>";
        
    }elseif($grade>=33 && $grade<39){
        echo "<span class=\"grade\"> Your Grade <br> D </span>";
        echo "<span class=\"point\"> Your Point <br> 1.00 </span>";
        
    }else{
        echo "<span class=\"grade\"> Your Grade <br> F </span>";
        echo "<span class=\"point\"> Your Point <br> 0.00 </span>";
        
    } */