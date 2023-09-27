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
    
    foreach($studentGrades as $student => $grades){
        $average = array_sum($grades) / count($grades);
        if ($average>=80) {
            echo "The Grade of {$student} is A+ \n";
            
        }elseif($average>70 && $average<=79){
            echo "The Grade of {$student} A \n";
            
        }elseif($average>=60 && $average<69){
            echo "The Grade of {$student} B \n";
            
        }else{
            echo "The Grade of {$student} F \n";
            
        }
    }
    
}

echo studentData($studentGrades);
