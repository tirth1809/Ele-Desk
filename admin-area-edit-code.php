<?php

include("connection.php");

$area_name = $_POST['area_name'];
$pin_code = $_POST['pin_code'];
$area_id = $_POST['area_id'];

$query= "update area_master set area_name='$area_name',pin_code='$pin_code' where area_id=$area_id";

mysqli_query($con,$query);

header("Location:admin-area.php");


?>