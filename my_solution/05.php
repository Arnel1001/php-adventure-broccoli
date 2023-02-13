<!-- 
    Write a program that takes an array of numbers as input and outputs the sum of the numbers.
 -->

 <?php

$input = array(2,0,2,0,8,0,4,7,5);

$sum = 0;

$len = count($input);           #the count function is used to get the length of the array of numbers

for ($i = 0; $i < $len; $i++) { #it iterates through each number in the array
  $sum += $input[$i];
}

echo "The sum of the array of numbers is: $sum";

?>
