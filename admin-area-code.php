<?php

include("connection.php");

$area_name = $_POST['area_name'];
$pin_code = $_POST['pin_code'];

print($area_name);
print($pin_code);

$query= "insert into area_master(area_name,pin_code) values ('$area_name','$pin_code')";

mysqli_query($con,$query);

header("Location:admin-area.php");


?>