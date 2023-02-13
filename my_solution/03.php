<!-- 
    Write a program that takes a string as input and outputs the frequency of each character in the string.
-->

<?php

$input = 'selecta';

$char_counts = [];                              #it counts the character input

$len = strlen($input);                          #it gets the length of the entered string
$i = 0;

while ($i < $len) {                             #while loop iterate through each character in the string
    $char = $input[$i];
  
    if (array_key_exists($char, $char_counts)) { #checks if the character exists through the $char_counts and increments it if it does
        $char_counts[$char]++;
    }
    else {
        $char_counts[$char] = 1;
    }  
    $i++;
}

foreach ($char_counts as $char => $count) {      #it is used to iterate through the array of character frequencies and output each character and its frequency
    echo "$char: $count"."<br>";
}

?>
