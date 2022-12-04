<?php

$arr = array(1, 3, 5, 7, 9);        // create array "arr"
$min = $arr[0];                     // create the variable "min" and assign with arr[0]
$max = $arr[0];                     // create the variable "max" and assign with arr[0]
$sum = 0;                           // create the variable "sum"
for ($i = 0; $i < count($arr); $i++) {
    if ($min > $arr[$i]) {          // compare the variable "min" with the values of "arr"
        $min = $arr[$i];            // assign the variable "min" with values of "arr" that are less than the variable "min"
    }
    if ($max < $arr[$i]) {          // compare "max" variable with values of "arr"
        $max = $arr[$i];            // assign the variable "max" with values of "arr" that are greater than the variable "max"
    }

    $sum += $arr[$i];               // sum the values of arr
}

$minimum = $sum - $max;             // create the variable "minimum" - sum the 4 smallest numbers
$maximum = $sum - $min;             // create the variable "maximum" - sum the 4 largest numbers
echo $minimum . " " . $maximum . "\n"; // print the respective minimum and maximum values

echo "even number: ";               // Find even elements in array
for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] % 2 == 0) {
        echo $arr[$i] . " ";
    }
}

echo "\n";

echo "odd number: ";                // Find odd elements in array
for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] % 2 != 0) {
        echo $arr[$i] . " ";
    }
}

echo "\n";
echo "smallest value in array: ".$min . "\n"    // min in array
    ."largest value in array: ". $max . "\n"    // max in array
    ."sum of values in array: ". "$sum". "\n";  // total of array