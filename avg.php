<?php

function calculateAverage($array) {
    return array_sum($array) / count($array);
}

$arr = [10, 20, 30, 40, 50];
$average = calculateAverage($arr);

echo "The average is: " . $average;

?>