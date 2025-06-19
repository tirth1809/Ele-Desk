<?php

include("connection.php");

$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$area_id=$_POST["area_id"];
$address=$_POST["address"];
$contact=$_POST["contact"];
$user_type= "Wholesaler";


$query = "insert into users(name,email,password,area_id,address,contact,user_type) values('$name','$email','$password','$area_id','$address','$contact','$user_type')";


mysqli_query($con,$query);
header("Location:dealer-wholesaler.php");

?>