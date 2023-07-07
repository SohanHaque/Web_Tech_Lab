<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Success Page</title>
</head>
<body>
    <center>
	    <fieldset>
<?php
	    session_start();
	    if(isset($_SESSION['fname']) &&
		    isset($_SESSION['lname']) && 
		    isset($_SESSION['uname']) &&
		    isset($_SESSION['gender']) &&
		    isset($_SESSION['email']) &&
		    isset($_SESSION['number']) &&
		    isset($_SESSION['address']))
	    {
		    echo "First Name: ".$_SESSION['fname'];
		    echo "<br>";
		    echo "Last Name: ".$_SESSION['lname'];
		    echo "<br>";
		    echo "User Name: ".$_SESSION['uname'];
		    echo "<br>";
		    echo "Gender: ".$_SESSION['gender'];
		    echo "<br>";
		    echo "Email Address: ".$_SESSION['email'];
		    echo "<br>";
		    echo "Phone Number: ".$_SESSION['number'];
		    echo "<br>";
		    echo "Addess: ".$_SESSION['address'];
		    echo "<br>";
		    echo "<a href='login.php'>Okay</a>";
	    }
?>
	    </fieldset>
    </center>
</body>
</html>