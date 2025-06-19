<?php

include("connection.php");

$product_id=$_POST["product_id"];
$discount_percentage=$_POST["discount_percentage"];

print($product_id); 
print($discount_percentage);

$query = "insert into discount(product_id,discount_percentage) values ('$product_id','$discount_percentage')";

mysqli_query($con,$query);

header("Location:admin-discount.php");
?>