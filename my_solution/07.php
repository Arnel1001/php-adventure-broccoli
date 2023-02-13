<!-- 
    Write a program that takes an array of strings as input and outputs the longest string in the array.
 -->

 <?php

$input = 'Arnel Guevarra Llabores';  

$strings = explode(" ", $input);                    #explode function converts the input string into an array of strings

$longestString = "";

foreach ($strings as $string) {                     #foreach is used to iterate through each string in the array
  if (strlen($string) > strlen($longestString)) {   #strlen is used to get the length of each string, 
    $longestString = $string;                       #if-statement is used to determine if the current string is longer than the recently found longest string
  }
}

echo "The longest string is: $longestString";

?>
