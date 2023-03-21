<?php
include "config.php";
session_start();
if(!isset($_SESSION['name']))
{
	header("location:welcom.php");
}
?>
<h1>welcome</h1>
<button><a href="logout.php">logout</a><button>