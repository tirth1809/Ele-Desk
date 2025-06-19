<?php

include("connection.php");

$product_id = $_POST['product_id'];
$discount_id = $_POST['discount_id'];
$discount_percentage = $_POST['discount_percentage'];

$query= "update discount set discount_percentage='$discount_percentage' where discount_id=$discount_id";

mysqli_query($con,$query);

header("Location:admin-discount.php");


?>