<?php

if(isset($_POST['continue'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $comp = $_POST['comp'];
    $add1 = $_POST['add1'];
    $add2 = $_POST['add2'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $ammount = $_POST['ammount'];
    $otherAmmount = $_POST['otherAmmount'];
    $interrested = $_POST['interrested'];
    $card1 = $_POST['card1'];
    $card2 = $_POST['card2'];
    $toHonour = $_POST['toHonour'];
    $name = $_POST['name'];

    $acknowledge = $_POST['acknowledge'];
    $add3 = $_POST['add3'];
    $city2 = $_POST['city2'];

    $zip2 = $_POST['zip2'];
    $anonymus = $_POST['chekbox2'];
    $comment = $_POST['comment'];
    $email3 = $_POST['email3'];
    $postmail2 = $_POST['postmail2'];
    $email232 = $_POST['email232'];
    $email232 = $_POST['email232'];
    $postmail2 = $_POST['postmail2'];
    $volunteer = $_POST['volunteer'];
    $volunteer = $_POST['volunteer'];



    session_start(); // Start the session

    $_SESSION['fname'] = $fname;
    $_SESSION['lname'] = $lname;
    $_SESSION['comp'] = $comp;
    $_SESSION['add1'] = $add1;
    $_SESSION['add2'] = $add2;
    $_SESSION['city'] = $city;
    $_SESSION['state'] = $state;
    $_SESSION['zip'] = $zip;
    $_SESSION['country'] = $country;
    $_SESSION['fax'] = $phone;
    $_SESSION['email'] = $email;
    $_SESSION['ammount'] = $ammount;
    $_SESSION['otherAmmount'] = $otherAmmount;
    $_SESSION['interrested'] = $interrested;
    $_SESSION['card1'] = $card1;
    $_SESSION['card2'] = $card2;
    $_SESSION['toHonour'] = $toHonour;
    $_SESSION['name'] = $name;
    $_SESSION['acknowledge'] = $acknowledge;
    $_SESSION['add3'] = $add3;
    $_SESSION['city2'] = $city2;
    $_SESSION['zip2'] = $zip2;
    $_SESSION['chekbox2'] = $anonymus;
    $_SESSION['comment'] = $comment;
    $_SESSION['email3'] = $email3;
    $_SESSION['postmail2'] = $postmail2;
    $_SESSION['email232'] = $email232;
    $_SESSION['postmail3'] = $postmail3;
    $_SESSION['volunteer'] = $volunteer;
    header("Location: home.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       echo $_SESSION['fname']."<br>";
       echo $_SESSION['lname']."<br>"; 
       echo $_SESSION['comp']."<br>"; 
       echo $_SESSION['add1']."<br>"; 
       echo $_SESSION['add2']."<br>"; 
       echo $_SESSION['city']."<br>"; 
       echo $_SESSION['state']."<br>"; 
       echo $_SESSION['zip']."<br>"; 
       echo $_SESSION['country']."<br>"; 
       echo $_SESSION['fax']."<br>"; 
       echo $_SESSION['email']."<br>"; 
       echo $_SESSION['ammount']."<br>"; 
       echo $_SESSION['otherAmmount']."<br>"; 
       echo $_SESSION['interrested']."<br>"; 
       echo $_SESSION['card1']."<br>"; 
       echo $_SESSION['card2']."<br>"; 
       echo $_SESSION['toHonour']."<br>"; 
       echo $_SESSION['name']."<br>"; 
       echo $_SESSION['acknowledge']."<br>"; 
       echo $_SESSION['add3']."<br>"; 
       echo $_SESSION['city2']."<br>"; 
       echo $_SESSION['zip2']."<br>"; 
       echo $_SESSION['anonymus']."<br>"; 
       echo $_SESSION['matchingGift']."<br>"; 
       echo $_SESSION['comment']."<br>"; 
       echo $_SESSION['email3']."<br>"; 
       echo $_SESSION['postmail2']."<br>"; 
       echo $_SESSION['email232']."<br>"; 
       echo $_SESSION['postmail2']."<br>"; 
       echo $_SESSION['volunteer']."<br>"; 

    ?>
</body>
</html>