<!-- 
    Write a program that takes a string as input and outputs whether it is a palindrome.
-->

<?php

$input = 'Yehey';
$lower = strtolower($input);                         #converts the input into lowercase
$reversed_input = strrev($lower);                    #reverse the input

if ($lower == $reversed_input) {                     #checks the input is the same with the reversed input
    echo "The string input is a palindrome."; 
}
else {
    echo "The string input is not a palindrome."; 
}

?>


