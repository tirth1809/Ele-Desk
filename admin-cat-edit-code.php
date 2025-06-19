<?php

include("connection.php");

$category_name=$_POST["category_name"];
$category_id=$_POST['category_id'];


$query= "update category set category_name='$category_name' where category_id=$category_id";


mysqli_query($con,$query);

header("Location:admin-cat.php");

?>

