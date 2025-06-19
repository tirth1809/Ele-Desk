<?php

include("connection.php");

$category_name=$_POST["category_name"];
$product_name=$_POST["product_name"];

$image="images/products/". $_FILES["image"]['name'];
move_uploaded_file($_FILES['image']['tmp_name'],$image);

$product_price=$_POST["product_price"];
$description=$_POST["description"];
$product_id=$_POST["product_id"];


$query="update product set category_id='$category_name',product_name='$product_name',image='$image',product_price='$product_price',description='$description' where product_id=$product_id";

mysqli_query($con,$query);

header("Location:admin-product.php");

?>  

