<html>
<body>
<form action="login2.php" method="post">
<table border=2 align="center">
<tr><th>name<td><input type="text" name="name">
<tr><th>password<td><input type="password" name="password">
<tr><td><input type="submit" name="submit" value="submit">
</table>
</form>
<button><a href="form.php">sing in</a></button>
</body>
</html>
<?php
include"config.php";
if(isset($_POST['submit']))
{
	$name=$_REQUEST['name'];
	$password=$_REQUEST['password'];
	$sql="SELECT * FROM `signup` WHERE `name`='$name' AND `password`='$password'";
	$res=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($res);
	$count=mysqli_num_rows($res);
	
	if($count > 0)
	{
		session_start();
		$_SESSION['name']=$row['name'];
		header("location:welcom.php");
	}
	else
	{
		 echo "not";
	}
}
?>
