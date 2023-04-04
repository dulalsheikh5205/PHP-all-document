<?php
  class MathHelper{
    public static function square($n){
        return $n*$n;
    }
    public static function cube($n){
        return $n*$n*$n;
    }
  }   
  
//   $mh = new MathHelper();
//   $mh->square(4);
//   echo $mh;

$square = MathHelper::square(4);
echo $square;
?>