<?php
session_start();

include("connection.php");

$email = $_POST['email'];
$password = $_POST['password'];



$q = "select * from users where email='$email' and password='$password'";   
$rs = mysqli_query($con,$q);

if($row=mysqli_fetch_array($rs))
{

    $user = $row['user_type'];
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['user_name'] = $row['name'];

    if($user == 'Admin')
    {   
        header("Location:admin-dashboard.php");
    }
    else if($user == 'Dealer'){
        header("Location:dealer-dashboard.php");
    }
    else{ 
        header("Location:wholesaler-dashboard.php");
    }
}
else
{
    echo "<script>alert('Incorrect Details Please try again.');</script>";
    echo "<script>setTimeout(function(){window.location.href='login.php';}, 500);</script>";
}

?>