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
			<?php
			    session_start();
			    if (isset($_SESSION['fname']) && isset($_SESSION['lname']) && isset($_SESSION['uname']) && isset($_SESSION['gender']) &&
				    isset($_SESSION['email']) && isset($_SESSION['number']) && isset($_SESSION['address'])) {
				    echo "First Name:" . $_SESSION['fname']."<br>";
				    echo "Last Name:" . $_SESSION['lname']."<br>";
				    echo "User Name:" . $_SESSION['uname']."<br>";
				    echo "Gender:" . $_SESSION['gender']."<br>";
				    echo "Email Address:" . $_SESSION['email']."<br>";
				    echo "Phone Number:" . $_SESSION['number']."<br>";
				    echo "Address:" . $_SESSION['address']."<br>";
			}
			?>
            <br>
            <input type="button" onclick="location.href='Login.php'" value="Done">
		</fieldset>
	</center>
</body>
</html>