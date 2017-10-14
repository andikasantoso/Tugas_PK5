<!DOCTYPE html>
<html>
<head>
	<title>Register Berhasil</title>
</head>
<body>
<table align="center">
<h1><center>Register Berhasil</center></h1>
<hr width="20%">
<?php 
$email=$_POST['email'];
$fullname=$_POST['fullname'];
$username=$_POST['username'];
$password=$_POST['password'];
$password = str_repeat("*" ,strlen($password));
echo "<tr><td>Email</td>
			<td> : </td>
			<td>$email</td>
		</tr>";
echo "<tr><td>Fullname</td>
			<td> : </td>
			<td>$fullname</td>
		</tr>";
echo "<tr><td>Username</td>
			<td> : </td>
			<td>$username</td>
		</tr>";
echo "<tr><td>Password</td>
			<td> : </td>
			<td>$password</td>
		</tr>";
?>
</body>
</html>
