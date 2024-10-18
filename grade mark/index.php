<?php
function calculateResult($marks){
    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            return "Mark range is Invalid";
        }
    }

    foreach ($marks as $mark) {
        if ($mark < 33) {
            return "You have failed";
        }
    }

    $totalMarks = array_sum($marks); 
    $averageMarks = $totalMarks / count($marks); 

    switch (true) {
        case ($averageMarks >= 80);
            $grade = "A+";
            break;
        case ($averageMarks >= 70);
            $grade = "A";
            break;
        case ($averageMarks >= 60);
            $grade = "A-";
            break;
        case ($averageMarks >= 50);
            $grade = "B";
            break;
        case ($averageMarks >= 40);
            $grade = "C";
            break;
        case ($averageMarks >= 33);
            $grade = "D";
            break;
    }
    return [
        'totalMarks' => $totalMarks,
        'averageMarks' => round($averageMarks, 2),
        "grade" => $grade];
}
$marks = [75, 78, 60, 46, 82]; 
$result = calculateResult($marks);

if (is_array($result)) {
    echo "Total Marks:" . $result['totalMarks'] . "\n";
    echo "Average Marks:" . $result['averageMarks'] . "\n";
    echo "Grade:" . $result['grade'] . "\n";
} else {
    echo $result;
}