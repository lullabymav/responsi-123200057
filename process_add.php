<?php
    require('connect.php');
    session_start();

    if(isset($_POST['save'])){
        $code = $_POST['code'];
        $name = $_POST['goods'];
        $amount = $_POST['amount'];
        $unit = $_POST['unit'];
        $codate = $_POST['codate'];
        $category = $_POST['category'];
        $status = $_POST['status'];
        $price = $_POST['price'];
        
        $query = "INSERT INTO inventory (item_id, item_name, amount, unit, arrival_date, category, item_status, price) VALUE ('$code', '$name', $amount, '$unit', '$codate', '$category','$status', $price)";
        $execute = $mydb->query($query);

        if($execute){
            header('location: view_inventory.php?status=success');
        }else{
            header('location: view_inventory.php?status=failed');
        }
    }else if(isset($_POST['cancel'])){
        header('location: view_inventory.php');
    }else{
        die("Access Denied. Please Try Again Later");
    }
?>