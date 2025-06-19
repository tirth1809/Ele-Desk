<?php

include("connection.php");
$user_id=$_POST['user_id'];
$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$area_id=$_POST["area_id"];
$address=$_POST["address"];
$contact=$_POST["contact"];



$query = "update users set name='$name',email='$email',password='$password',area_id='$area_id',address='$address',contact='$contact' where user_id=$user_id";


mysqli_query($con,$query);
header("Location:admin-dealer.php");
?>