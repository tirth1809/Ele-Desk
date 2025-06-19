<?php
session_start();

include("connection.php");

$product_id=$_POST["product_id"];
$quantity=$_POST["quantity"];
$date=$_POST["date"];
$user_id= $_SESSION['user_id'];
// $user_id= 1;

print($product_id);
print($quantity);
print($date);

$q="select * from stocks where product_id = $product_id";
$rscheck = mysqli_query($con,$q);

if($rowcheck=mysqli_fetch_array($rscheck)){
    $query = "update stocks set quantity= quantity + $quantity,date='$date' where product_id=$product_id and user_id=$user_id";
    mysqli_query($con,$query);
    
}
else{
$query = "insert into stocks(user_id,product_id,quantity,date) values('$user_id','$product_id','$quantity','$date')";
mysqli_query($con,$query);
}
header("Location:wholesaler-stock.php");

?>