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
        
        $query = "UPDATE inventory SET item_id='$code', item_name='$name', amount=$amount, unit='$unit', arrival_date='$codate', category='$category', item_status='$status', price=$price WHERE item_id='$code'";
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