<?php
    $server="34.123.150.246";
    $username="root";
    $password="";
    $db="responsi";

    $mydb = mysqli_connect($server,$username,$password,$db);
    if($mydb){
        // echo "Success";
    }
    else{
        echo "Error";
    }
?>
