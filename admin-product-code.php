<?php

include("connection.php");

$category_name=$_POST["category_name"];
$product_name=$_POST["product_name"];

$image="images/products/". $_FILES["image"]['name'];
move_uploaded_file($_FILES['image']['tmp_name'],$image);

$cost=$_POST["cost"];
$description=$_POST["description"];


print($category_name);
print($product_name);
print($image);
print($cost);
print($description); 

$query="insert into product(category_id,product_name,image,product_price,description) values('$category_name','$product_name','$image','$cost','$description')";

mysqli_query($con,$query);

header("Location:admin-product.php");

?>