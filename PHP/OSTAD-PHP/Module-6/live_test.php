

<?php
/* <!-- Write a PHP script that reads the contents of a file named "ostad.txt", adds the current date and time to the contents of the file, and saves it back to the file. If the file does not exist, the script should create it.
Hints: You may use the following functions date("Y-m-d H:i:s"), file_exists(), fopen(), fread($file, filesize($file_name)), fseek(), fwrite(), fclose() etc where $file_name=ostad.txt and $file= fopen($file_name, "r+"); --> */
date_default_timezone_set('Asia/Dhaka');
$file_name = "ostad.txt";

if ( file_exists( $file_name ) ) {
    $file = fopen( $file_name, "r+" );

    fseek( $file, 0, SEEK_END );
    $current_date = date( "Y-m-d H:i:s" );

    fwrite( $file, "\n$current_date" );

    fclose( $file );
} else {
    $file = fopen( $file_name, "w" );

    $current_date = date( "Y-m-d H:i:s" );

    fwrite( $file, $current_date );

    fclose( $file );
} 
 
?>