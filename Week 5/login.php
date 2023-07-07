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
		<legend><i>Login Page</i></legend>
		    <form method = "post" action ="login.php">
			    <table>
				    <tr>
					    <td>Username:</td>
					    <td><input type="text" name="username"> </td>
				    </tr>
				    <tr>
					    <td>Password:</td>
					    <td><input type="password" name="password"></td>
				    </tr>
				    <tr>
					    <td><input type="submit" name="login" value="Login"></td>
					    <td><input type="submit" name="reg" value="New user?"></td>
				    </tr>
			    </table>
		    </form>
	    </fieldset>
    </center>
</body>
</html>
<?php
	if(isset($_POST['reg']))
	{
		$cookie_name = "new_user";
		$cookie_value = "user1";
		setcookie($cookie_name,$cookie_value, time()+300);
		header("location: reg.php");
	}
	if(isset($_POST['login']))
	{
		$db = mysqli_connect("localhost","root","password","sample_project");
		session_start();
		$uname = $_POST['username'];
		$password = $_POST['password'];
		$sql = "SELECT * from user where uname = '$uname' AND password = '$password'";
		$varify = mysqli_query($db, $sql);
		if(mysqli_num_rows($varify) == 1)
		{
			$_SESSION['uname'] = $uname;
			header("location: userhome.php");
		}
		else 
		{
			print("<center>Wrong username/password!</center>");
			echo ("<center><a href= 'forget.php'>Forget Username/Password?</a></center>");
		}
	}
?>