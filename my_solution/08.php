<!-- 
    Write a program that takes a string as input and outputs the number of words in the string.
 -->

 <?php

$input = 'Arnel Guevarra Llabores';

$words = explode(" ", $input);             #explode function converts the input string into an array of strings

$wordCount = count($words);                #count function is used to get the number of words in the string

echo "String: $input"."<br>";
echo "The number of words in the string is: $wordCount";

?>
