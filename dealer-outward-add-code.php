<?php
session_start();

include("connection.php");

$date=date('Y-m-d');
$user_id = $_SESSION['user_id'];
$product_id=$_POST["product_id"];
$order_id=$_POST["order_id"];
$quantity=$_POST["quantity"];
$remarks=$_POST["remarks"];



$qorder="select * from order_master where order_id = $order_id ";
$rsorder = mysqli_query($con,$qorder);

$wholesalerUserId = 0;
if($roworder = mysqli_fetch_array($rsorder)){
    $wholesalerUserId = $roworder['user_id'];
}



$qstockMinus="select * from stocks where  user_id = $user_id and product_id = $product_id ";
$rsStockMinus = mysqli_query($con,$qstockMinus);

if($rowMinus=mysqli_fetch_array($rsStockMinus)){

    
    // give condition for out of stock
    $currentStock = $rowMinus['quantity'];
    if( $currentStock < $quantity)
        {
            $url = "Location:dealer-outward-add.php?order_id=$order_id&outofstock=yes";
            header($url);
            die(" Out Of Stock");
        }

    $stock_id = $rowMinus['stock_id'];
    $query = "update stocks set quantity= quantity - $quantity,date='$date' where stock_id=$stock_id";
    mysqli_query($con,$query); 

}

$qstockPlus="select * from stocks where  user_id = $wholesalerUserId and product_id = $product_id ";
$rsStockPlus = mysqli_query($con,$qstockPlus);

if($rowPlus=mysqli_fetch_array($rsStockPlus)){
    $stock_id = $rowPlus['stock_id'];
    $query = "update stocks set quantity= quantity + $quantity,date='$date' where stock_id=$stock_id";
    mysqli_query($con,$query); 
}



$query = "insert into outward(order_id,date,product_id,user_id,quantity,remarks) 
values('$order_id','$date','$product_id','$user_id','$quantity','$remarks')"; 


mysqli_query($con,$query);

print $query;
header("Location:dealer-outward-view.php");

?>