<!-- 
    Write a program that takes an array of numbers as input and outputs the average of the numbers.
-->

<?php

$input = '2020 80 475';

$numbers = explode(" ", $input);    #explode function converts the input numbers into an array of numbers

$sum = 0;

foreach ($numbers as $number) {     #foreach is used to iterate through each number in the array
    $sum += $number;
}

$average = $sum / count($numbers);      #count is used to get the number of numbers in the array

echo "The average of the numbers is: $average";

?>
