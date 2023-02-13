<!-- 
    Write a program that takes a character as input and outputs whether it is a vowel or a consonant.
-->


<?php

$input = 'Z';                                 #character input
$vowels = array("a", "e", "i", "o", "u"); 

if (in_array(strtolower($input), $vowels)) {  #in_array check the input if vowel and strtolower converts input to lowercase
  echo "The Character input is ", "\"$input\"", " and it is a Vowel."; 
}
else { 
  echo "The Character input is ", "\"$input\"", " and it is a Consonant.";
}

?>
