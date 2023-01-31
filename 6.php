<?php
    include 'db_connect.php';
        //session_start();
        $id = $_POST['id'];
        $pname = $_POST['name'];
        $price = $_POST['price'];
        $q = $_POST['q'];
        
       
        $q =  "UPDATE `product_details` SET `product_name`='$pname',`price`='$price',`quantity`='$q' WHERE id='$id'";
        $run = mysqli_query($con, $q);
        
        header('location:succ.php');
        $con->close();
?>
