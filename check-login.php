<?php

include("connection.php");

$email = $_POST['email'];
$password = $_POST['password'];

$q = "select * from users where email='$email' and password='$password'";   
$rs = mysqli_query($con,$q);

if($row=mysqli_fetch_array($rs))
{
    header("Location:admin-area.php");
}
else
{
    header("Location:login.php");
}

?>