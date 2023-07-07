<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Page</title>
</head>
<body>
	<center>
		<fieldset>
			<form method="post" action="reg.php">
				<table>
					<tr>
						<td>First Name:</td>
						<td><input type="text" name="fname" placeholder="Enter your first name" required>
					</tr>
					<tr>
						<td>Last Name:</td>
						<td><input type="text" name="lname" placeholder="Enter your last name" required>
					</tr>
					<tr>
						<td>User Name:</td>
						<td><input type="text" name="uname" placeholder="Enter your user name" required>
					</tr>
					<tr>
						<td>Gender:</td>
						<td>
							<input type="radio" name="gender" value="Male" required> Male
							<input type="radio" name="gender" value="Female" required> Female 
						</td>
					</tr>
					<tr>
						<td>Email Address:</td>
						<td><input type="email" name="email" placeholder="Enter your email" required>
					</tr>
					<tr>
						<td>Phone Number:</td>
						<td><input type="tel" name="number" placeholder="Enter your phone number" required>
					</tr>
					<tr>
						<td>Address:</td>
						<td><textarea name ="address" placeholder="Enter your address" required></textarea></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="pass1" placeholder="Enter your password" required>
					</tr>
					<tr>
						<td>Confirm Password:</td>
						<td><input type="password" name="pass2" placeholder="Enter your password again" required>
					</tr>
				</table>
				<input type="submit" name="signup" value="Signup">
			</form>
<?php
	if($_COOKIE['new_user'] == 'user1')
	{
		echo "<br><b><i>You have only 5 minutes to fill up and submit the registration form</i></b><br>";
	}
	else
	{
		header("location: login.php");
	}
	if(isset($_POST['signup']))
	{
		session_start();
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$uname = $_POST['uname'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$number = $_POST['number'];
		$address = $_POST['address'];
		$pass1 = $_POST['pass1'];
		$pass2 = $_POST['pass2'];
		if($pass1 == $pass2)
		{
			$db = mysqli_connect("localhost","root","password","sample_project");
			if (!$db) {
				die("Connection failed: " . mysqli_connect_error());
			  }
			  echo "Connected successfully";
			$sql = "INSERT INTO user(fname, lname, uname,gender, email, phoneNum, address, password) VALUES ('$fname','$lname', '$uname', '$gender', '$email', '$number', '$address', '$pass1')";

			if (mysqli_query($db, $sql)) {
				echo "New record created successfully";
			  } else {
				echo "Error: " . $sql . "<br>" . mysqli_error($db);
			  }
			$_SESSION['fname'] = $fname;
			$_SESSION['lname'] = $lname;
			$_SESSION['uname'] = $uname;
			$_SESSION['gender'] = $gender;
			$_SESSION['email'] = $email;
			$_SESSION['number'] = $number;
			$_SESSION['address'] = $address;
			header("location:regsuccess.php");	
		}
		else
		{
			echo "<i>Password doesn't match</i>";
		}
	}
?>
			<br>
			<form method="post" action="reg.php">
				<input type="submit" name="back" value="Back">
			</form>
		</fieldset>
	</center>
</body>
</html>
<?php
	if(isset($_POST['back']))
	{
		header("location: login.php");
	}
?>