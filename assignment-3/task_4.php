<?php

// Task 4:  calculate and print the average grade for each student.

$studentGrades = [
    ["Math" => "80", "English" => "85", "Science" => "95"],
    ["Math" => "85", "English" => "80", "Science" => "90"],
    ["Math" => "90", "English" => "90", "Science" => "85"]
];

function averageGrade($students)
{
    foreach ($students as $grades) {
        $resultGraders = array_sum($grades);
        $countGrades = count($grades);
        $average = $resultGraders / $countGrades;
        echo "Average Grade : $average <br>";
    }
}
averageGrade($studentGrades);