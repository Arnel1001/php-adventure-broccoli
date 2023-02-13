<!-- 
    Write a program that takes a number as input and outputs the sum of its digits.
 -->

 <?php

$input = '202080475';

$sum = 0;

$len = strlen($input);                  #it gets the value of length of the inputted numbers

for ($i = 0; $i < $len; $i++) {         # the for loop to iterate through each digit in the number
  $sum += (int)$input[$i];              # int converts the character representation of each digit to its integer value
}

echo "The sum of the digits is: $sum";

?>
