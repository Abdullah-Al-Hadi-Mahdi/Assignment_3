<?php
$studentGrades = [
    "Student_1" => ['Math' => 85, 'English' => 92, 'Science' => 75],
    "Student_2" => ['Math' => 80, 'English' => 80, 'Science' => 95],
    "Student_3" => ['Math' => 74, 'English' => 80, 'Science' => 80],
];

function averageGrade($studentGrades)
{
    foreach ($studentGrades as $student => $grades) {
        $numberOfSubjects = count($grades);
        $totalGrades = array_sum($grades);
        $averageGrade = $totalGrades / $numberOfSubjects;
        echo "{$student}\n Average Grade: {$averageGrade}\n";
    }
}
averageGrade($studentGrades);