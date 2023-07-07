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
            <form method="post" action="resetPassword.php">
                <table>
                    <tr>
                        <td>New Password:</td>
                        <td><input type="password" name="password1"> </td>
                    </tr>
                    <tr>
                        <td>Confirm Password:</td>
                        <td><input type="password" name="password2"> </td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="login" value="Confirm"></td>
                        <!-- <td><input type="submit" name="log" value="Back Login"></td> -->
                    </tr>
                </table>
            </form>
        </fieldset>
    </center>
</body>

</html>
<?php
if (isset($_POST['login'])) {
    $db = mysqli_connect("localhost", "root", "password", "sample_project");
    session_start();

    $pass1 = $_POST['password1'];
    $pass2 = $_POST['password2'];

    if ($pass1 == $pass2) {
        $sql = "UPDATE user SET password = '$pass1' WHERE uname = '$_SESSION[uname]'";
        $varify = mysqli_query($db, $sql);
        if ($varify) {
            echo "Password Changed Successfully";
        } else {
            echo "Password Change Failed";
        }
    } else {
        echo "Password Mismatch";
    }
}
?>