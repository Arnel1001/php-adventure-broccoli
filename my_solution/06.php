<!-- 
    Write a program that outputs the first n triangular numbers.
 -->

 <?php

$n = 18;

for ($i = 1; $i <= $n; $i++) {                  #for loop is used to calculate and output the first n triangular numbers. 
  $triangularNumber = $i * ($i + 1) / 2;        #Using the formula for a triangular number which is n * (n + 1) / 2, 
  echo "$triangularNumber"."<br>";                   #where n is the index of the triangular number. The loop starts at 1 and runs until $i is equal to $n
}

?>
