<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
     session_start();
    echo $_SESSION['fname'] . "<br>" ?? "";
    echo $_SESSION['lname'] . "<br>";
    echo $_SESSION['comp'] . "<br>";
    echo $_SESSION['add1'] . "<br>";
    echo $_SESSION['add2'] . "<br>";
    echo $_SESSION['city'] . "<br>";
    echo $_SESSION['state'] . "<br>";
    echo $_SESSION['zip'] . "<br>";
    echo $_SESSION['country'] . "<br>";
    echo $_SESSION['fax'] . "<br>";
    echo $_SESSION['email'] . "<br>";
    echo $_SESSION['ammount'] . "<br>";
    echo $_SESSION['otherAmmount'] . "<br>";
    echo $_SESSION['interrested'] . "<br>";
    echo $_SESSION['card1'] . "<br>";
    echo $_SESSION['card2'] . "<br>";
    echo $_SESSION['toHonour'] . "<br>";
    echo $_SESSION['name'] . "<br>";
    echo $_SESSION['acknowledge'] . "<br>";
    echo $_SESSION['add3'] . "<br>";
    echo $_SESSION['city2'] . "<br>";
    echo $_SESSION['zip2'] . "<br>";
    // echo $_SESSION['anonymus'] . "<br>";
    // echo $_SESSION['matchingGift'] . "<br>";
    echo $_SESSION['comment'] . "<br>";
    echo $_SESSION['email3'] . "<br>";
    echo $_SESSION['postmail2'] . "<br>";
    echo $_SESSION['email232'] . "<br>";
    echo $_SESSION['postmail2'] . "<br>";
    echo $_SESSION['volunteer'] . "<br>";
    ?>
</body>

</html>