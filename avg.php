<?php

function calculateAverage($array) {
    return array_sum($array) / count($array);
}

$arr = [10, 20, 30, 40, 50];
$average = calculateAverage($arr);

echo "The average is: " . $average;

$values = [4, 3, 5];
$weights = [9, 1, 3];

$weightedSum = 0;
$weightTotal = array_sum($weights);

foreach ($values as $i => $value) {
    $weightedSum += $value * $weights[$i];
}

$weightedAverage = $weightedSum / $weightTotal;

echo $weightedAverage; // wynik: 4.33332233

?>