<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
</head>
<body>
<center>
	<fieldset>
		<legend><i>Forget Password Page</i></legend>
		<form method = "post" action ="forget.php">
			<table>
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username"> </td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td><input type="submit" name="login" value="Reset"></td>
					<td><input type="submit" name="log" value="Back Login"></td>
				</tr>
			</table>
		</form>
	</fieldset> 
</center>
</body>
</html>
<?php
	if(isset($_POST['log']))
	{
		header("location: login.php");
	}
	if(isset($_POST['login']))
	{
		$db = mysqli_connect("localhost","root","password","sample_project");
		session_start();

		$uname = $_POST['username'];
        $email = $_POST['email'];
        
        
		$sql = "SELECT * from user where uname = '$uname' AND email = '$email'";
		$varify = mysqli_query($db, $sql);
		if(mysqli_num_rows($varify) == 1) //1 row return
		{
			header("location: resetPassword.php");
		}
		else 
		{
			print("<center>Wrong username/password!</center>");
			echo ("<center><a href= 'forget.php'>Forget Username/Password?</a></center>");
		}
	}
?>