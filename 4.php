<?php
include 'db_connect.php';


$queries = array();
parse_str($_SERVER['QUERY_STRING'], $queries);
$id = $queries['id'];

$sql = "DELETE FROM  product_details WHERE id= $id";
$result = mysqli_query($con, $sql);

$con->close();

header("Location: 3.php");
exit();