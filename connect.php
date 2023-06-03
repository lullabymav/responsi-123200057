<?php
    $server="34.123.150.246";
    $username="h-04";
    $password="123";
    $db="responsi";

    $mydb = mysqli_connect($server,$username,$password,$db);
    if($mydb){
        // echo "Success";
    }
    else{
        echo "Error";
    }
?>
