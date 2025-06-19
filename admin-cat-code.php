<?php

include("connection.php");

$category_name=$_POST["category_name"];
print ($category_name);

$query="insert into category(category_name) values('$category_name')";

mysqli_query($con,$query);

header("Location:admin-cat.php");

?>