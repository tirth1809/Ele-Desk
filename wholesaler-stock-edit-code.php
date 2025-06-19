<?php

include("connection.php");

$product_id=$_POST["product_id"];
$stock_id=$_POST["stock_id"];
$quantity=$_POST["quantity"];
$date=$_POST["date"];

$user_id= 1;

$query = "update stocks set product_id='$product_id',date='$date',quantity='$quantity' where stock_id=$stock_id";

mysqli_query($con,$query);
header("Location:wholesaler-stock.php");
// print $query;

?>