<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
		<fieldset>
			<form method="post" action="Registration.php">
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
							<input type="radio" name="gender" value="male" required> Male
							<input type="radio" name="gender" value="female" required> Female 
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
            <br>
            <br>
            <input type="button" onclick="location.href='Login.php'" value="Back">
        </fieldset>
    </center>
</body>
</html>

<?php
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
			$_SESSION['fname'] = $fname;
			$_SESSION['lname'] = $lname;
			$_SESSION['uname'] = $uname;
			$_SESSION['gender'] = $gender;
			$_SESSION['email'] = $email;
			$_SESSION['number'] = $number;
			$_SESSION['address'] = $address;
			header("location:RegSuccess.php");
		}
		else
		{
			echo "<p style='color:red;'>Password doesn't match</p>";
		}
	}
?>