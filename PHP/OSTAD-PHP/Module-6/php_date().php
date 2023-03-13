<?php
  echo date("Y/m/d")."<br>";
  echo date("Y.m.d")."<br>";
  echo date("Y-m-d")."<br>";
  echo date("l")."<br>";      
?>
<?php
  echo date("h:i:sa")."<br>";  
  date_default_timezone_set('Asia/Dhaka');
  echo date("h:i:sa")."<br>";    
?>
<?php
      date_default_timezone_set('Asia/Dhaka');
      $myDate  = date('h:i:sa');
      echo $myDate;
      echo "<br>";
?>
<?php
   $dateOfBirth = date_create("2023-03-12");
   date_sub($dateOfBirth,date_interval_create_from_date_string("2 years"));
   $newDate = date_format($dateOfBirth,"Y-m-d");
   echo $newDate;  
   echo "<br>";   
?>

<?php
  $date1 = date_create("2023-01-01");
  $date2 = date_create("2010-01-01");
  $diff = date_diff($date1,$date2);
  echo $diff->format("%R%a days");      
?>

<?php
  $date = date_create();
  $unix = date_timestamp_get($date);
  echo $unix;      
?>

