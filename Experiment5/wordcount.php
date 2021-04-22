<?php
// PHP program to count number
// of words in a string 
    
// Function to count the words
function get_num_of_words($string) {
      $string = preg_replace('/\s+/', ' ', trim($string));
      $words = explode(" ", $string);
      return count($words);
}
  
$str = "  Geeks  for    Geeks  "; 
    
// Function call 
$len = get_num_of_words($str);
  
// Printing the result
echo $len; 
?>

