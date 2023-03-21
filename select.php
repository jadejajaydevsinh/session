<html>
<body>
<table BORDER=2>
<tr>
<th>id</th>
<th>name</th>
<th>email</th>
<th>password</th>
<th>city</th>
<th>opration</th>
</tr>
<?php
include "config.php";
$sql="SELECT * FROM `signup`";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($res))
{ 
	$id=$row['id'];
?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['password'];?></td>
<td><?php echo $row['city'];?></td>
<td><a href="update.php">update</a>
<a href="delet.php">delete</a></td>
</tr>
<?php
}
?>
</table>
</body>
</html>

