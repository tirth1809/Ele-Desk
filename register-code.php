<?php

include("connection.php");

$name=$_POST["name"];
$email=$_POST["email"];
$address=$_POST["address"];
$contact=$_POST["contact"];


$query="insert into inquiry(name,email,address,contact) values('$name','$email','$address','$contact')";

mysqli_query($con,$query);

header("Location:register.php");

?>