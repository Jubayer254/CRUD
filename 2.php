<?php
    include 'db_connect.php';
        session_start();
        $name = $_POST['name'];
        $price = $_POST['price'];
        $q = $_POST['q'];

        $q =  "INSERT INTO `product_details`(`product_name`, `price`, `quantity`) VALUES ('$name','$price','$q');";
        $run = mysqli_query($con, $q);

       
        
        header('location:3.php');
        $con->close();
?>
