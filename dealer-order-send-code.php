<?php
session_start();

include("connection.php");

$order_date=date('Y-m-d');
$user_id = $_SESSION['user_id'];
$product_id=$_POST["product_id"];
$quantity=$_POST["quantity"];
$remarks=$_POST["remarks"];
$payment_status="N";


$query = "insert into order_master(order_date,product_id,user_id,quantity,payment_status,remarks) 
values('$order_date','$product_id','$user_id','$quantity','$payment_status','$remarks')"; 


mysqli_query($con,$query);

print $query;
header("Location:dealer-my-orders.php");

?>