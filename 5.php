<?php
include 'db_connect.php';


$queries = array();
parse_str($_SERVER['QUERY_STRING'], $queries);
$id = $queries['id'];

$sql = "Select * from product_details where id=$id";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result)>0){
    while($row = $result->fetch_assoc()){
        $id= $row["id"];
        $pname= $row["product_name"];
        $price= $row["price"];
        $q= $row["quantity"];
       
    }
} 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <form action="6.php" method="POST">
    <label for="name">Product Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="text" name="name" value="<?php echo $pname?>"><br>
        <label for="price">Product Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="text" name="price" value="<?php echo $price?>"><br>
        <label for="q">Product Quantity:&nbsp;</label>
        <input type="text" name="q" value="<?php echo $q?>"><br>
        <input type="hidden" name="id" value="<?php echo $id?>">
        <button type="submit">Update</button>


    </form>
</head>
<body>
    
</body>
</html>