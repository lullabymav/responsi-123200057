<?php
    $server="34.123.150.246";
    $username="h-04";
    $password="123";
    $db="semester-6-be";

    $mydb = new mysqli($server,$username,$password,$db);
    if($mydb->connect_error){
        die("Connection failed: " . $mydb->connect_error);
    }
?>