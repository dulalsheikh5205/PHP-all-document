<?php
  write a PHP function to find the longest word in a string ?

  // Example 
  $str = "The quick brown fox jumped over the lazy dog";
  echo longestWord($str);
  // output : jumped

  function longestWord(){
    $str_to_arr = explode($str,'');
    return $str_to_arr;
  }

?>
<?php
$str = "The quick brown fox jumped over the lazy dog";
echo longestWord($str);
// Output: jumped




  function longestWord($str) {
    $words = explode(" ", $str); // split the string into an array of words
    $longest_word = ""; // initialize variable to hold the longest word
  
    foreach ($words as $word) {
      if (strlen($word) > strlen($longest_word)) {
        $longest_word = $word; // update longest_word if current word is longer
      }
    }
  
    return $longest_word;
  }
        
?>



<?php
  // mahmudul 

  function largest_str_word($str)
{
    $str_to_arr = explode(" ",$str);
    // print_r($str_to_arr) ;
   /*  for ($i=0; $i < count($str_to_arr); $i++) { 
        return strlen($str_to_arr[$i]); */
        $lg_word = "" ;
        foreach ($str_to_arr as $key => $value) {
            if (strlen($value) > strlen($lg_word)) {
              $lg_word = $value;
            }
        }
        echo $lg_word;
    }



$res = "The quick fox jumped over the lazy dog";
largest_str_word($res);      
?>