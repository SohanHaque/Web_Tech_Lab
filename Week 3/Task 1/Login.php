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
            <legend>Login Page</legend>
            <form method = "post" action ="Login.php">
                <table>
                    <tr>
					    <td>Username:</td>
					    <td><input type="text" name="username" required> </td>
				    </tr>
				    <tr>
					    <td>Password:</td>
					    <td><input type="password" name="password" required></td>
				    </tr>
                </table>
                <td><input type="submit" name="login" value="Login"></td>
            </form>
            <br>
            <td><input type="button" onclick="location.href='Registration.php'" value="New user?"></td>
        </fieldset>
    </center>
</body>
</html>

<?php
    

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == "sohan" && $password == "password")
		{
			session_start();
			$_SESSION['username'] = $username;
			header("location:Homepage.php");
		}
        else{
            echo "<p style='color:red;'>Username or Password Incorrect</p>";
        }
    }
?>