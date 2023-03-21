<?php
include "config.php";

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$city=$_REQUEST['city'];
$insert="INSERT INTO `signup`( `name`, `email`, `password`, `city`) 
VALUES ('$name','$email','$password','$city' ) ";
$result=mysqli_query($con,$insert);
if($result==TRUE)
{
	header("location:logout.php");
}
else
{
	echo "not!";
}