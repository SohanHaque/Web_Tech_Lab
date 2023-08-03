<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .sbar {
            width: 50px;
        }

        .commentBox {
            width: 300px;
            height: 100px;
        }

        line {
            display: block;
            height: 2px;
            border: 1;
            border-top: 8px solid #ffffff;
            margin: 1em 0;
            padding: 0;
        }
    </style>
</head>

<body style="background-color:#e8eaeb;">
    <form action="operation.php" method="POST" onsubmit="return valid()" >
        <h2 style="color: red">Donor Information</h2>
        <table>
            <tr>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <td><label for="fname"><b>First name:</b></label><label style="color: red"><b>*</b></label></td>
                <td><input type="text" id="fname" name="fname"><br></td>
            </tr>
            <tr>
                <td><label for="lname"><b>Last name:</b></label><label style="color: red"><b>*</b></label></td>
                <td><input type="text" id="lname" name="lname"><br></td>
            </tr>
            <tr>
                <td><label for="comp"><b>Company:</b></label></td>
                <td><input type="text" id="comp" name="comp"><br></td>
            </tr>
            <tr>
                <td><label for="add1"><b>Address1:</b></label><label style="color: red"><b>*</b></label></td>
                <td><input type="text" id="add1" name="add1"><br></td>
            </tr>
            <tr>
                <td><label for="add2"><b>Address2:</b></label></td>
                <td><input type="text" id="add2" name="add2"><br></td>
            </tr>
            <tr>
                <td><label for="city"><b>City:</b></label><label style="color: red"><b>*</b></label></td>
                <td><input type="text" id="city" name="city"><br></td>
            </tr>
            <tr>
                <td><label for="state"><b>State:</b></label><label style="color: red"><b>*</b></label></td>
                <td><select name="state" id="state">
                        <option value="select state">select state</option>
                        <option value="dhaka">Dhaka</option>
                        <option value="chittagong">Chittagong</option>
                        <option value="rajshahi">Rajshahi</option>
                        <option value="khulna">Khulna</option>
                        <option value="barisal">Barisal</option>
                        <option value="sylhet">Sylhet</option>
                        <option value="rangpur">Rangpur</option>
                    </select><br></td>
            </tr>
            <tr>
                <td><label for="zip"><b>Zip Code:</b></label><label style="color: red"><b>*</b></label></td>
                <td><input type="text" id="zip" name="zip"><br></td>
            </tr>
            <tr>
                <td><label for="country"><b>Country:</b></label><label style="color: red"><b>*</b></label></td>
                <td><select name="country" id="country">
                        <option value="select country">select country</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="India">India</option>
                        <option value="Pakistan">Pakistan</option>
                    </select><br></td>
            </tr>
            <tr>
                <td><label for="phone"><b>Phone:</b></label></td>
                <td><input type="text" id="phone" name="phone"><br></td>
            </tr>
            <tr>
                <td><label for="fax"><b>Fax:</b></label></td>
                <td><input type="text" id="fax" name="fax"><br></td>
            </tr>
            <tr>
                <td><label for="email"><b>Email:</b></label><label style="color: red"><b>*</b></label></td>
                <td><input type="email" id="email" name="email"><br></td>
            </tr>
            <tr>
                <td><label for="don.amm"><b>Donation Ammount:</b></label><label style="color: red"><b>*</b></label></td>
                <td><input type="radio" id="none" name="ammount" value="none">
                    <label for="none">None</label>
                    <input type="radio" id="ammount-50" name="ammount" value="50$">
                    <label for="ammount-50">50$</label>
                    <input type="radio" id="ammount-75" name="ammount" value="75$">
                    <label for="ammount-75">75$</label>
                    <input type="radio" id="ammount-100" name="ammount" value="100$">
                    <label for="100$">100$</label>
                    <input type="radio" id="ammount-250" name="ammount" value="250$">
                    <label for="250$">250$</label>
                    <input type="radio" id="noner" name="ammount" value="other">
                    <label for="other">other</label><br>
                </td>
            </tr>
            <tr>
                <td><label for="comment">(check a button or type<br> in your amount)</label></td>
                <td><label for="other ammount"><b>Other Ammount $</b></label>
                    <input type="text" id="other_ammount" name="otherAmmount"><br>
                </td>
            </tr>
            <tr>
                <td><label for="recurring donation"><b>Recurring-Donation: </b></label></td>
                <td><input type="checkbox" id="interrested" name="interrested" value="interrested">
                    <label for="interrested"> I am interrested in giving on a regular basis.</label><br>
                </td>
            </tr>
            <tr>
                <td>
                    <p>(check if yes)</p>
                </td>
                <td><label for="c.card">Monthly Credit Card $</label>
                    <input type="text" class="sbar" id="ccard" name="card1">
                    <label for="c.card">For</label>
                    <input type="text" class="sbar" id="ccard" name="card2">
                    <label for="c.card">Months</label>
                </td>
            </tr>
            <tr>
                <td>
                    <h2 style="color: red">Honorarium and Memorial</h2>
                </td>
                <td>
                    <h2 style="color: red">Information</h2>
                </td>
            </tr>
            <tr>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <td><label for="honour"><b>I would like to make this donation</b></label></td>
                <td><input type="radio" id="toHonour" name="toHonour" value="toHonour">
                    <label for="toHonour">To Honour</label>
                    <input type="radio" id="inMemoryOf" name="toHonour" value="inMemoryOf">
                    <label for="inMemoryOf">In Memory of</label><br>
                </td>
            </tr>
            <tr>
                <td><label for="name"><b>Name: </b></label></td>
                <td><input type="text" id="name" name="name"><br></td>
            </tr>
            <tr>
                <td><label for="acknowledge"><b>Acknowledge Donation to: </b></label></td>
                <td><input type="text" id="acknowledge" name="acknowledge"><br></td>
            </tr>
            <tr>
                <td><label for="add"><b>Address:</b></label></td>
                <td><input type="text" id="add" name="add3"><br></td>
            </tr>
            <tr>
                <td><label for="city2"><b>City:</b></label></td>
                <td><input type="text" id="city2" name="city2"><br></td>
            </tr>
            <tr>
                <td><label for="state"><b>State:</b></label></td>
                <td><select name="state" id="state">
                        <option value="select state">select state</option>
                        <option value="dhaka">Dhaka</option>
                        <option value="chittagong">Chittagong</option>
                        <option value="rajshahi">Rajshahi</option>
                        <option value="khulna">Khulna</option>
                        <option value="barisal">Barisal</option>
                        <option value="sylhet">Sylhet</option>
                        <option value="rangpur">Rangpur</option>
                    </select><br></td>
            </tr>
            <tr>
                <td><label for="zip2"><b>Zip:</b></label></td>
                <td><input type="text" id="zip2" name="zip2"><br></td>
            </tr>
            <tr>
                <td>
                    <h2 style="color: red">Aditional Information</h2>
                </td>
                <td></td>
            </tr>
        </table>
        <p>Please enter your name, company or organization as you would like it to appear in our publications:</p>
        <td><label for="name2"><b>Name:ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</b></label></td>
        <td><input type="text" id="name2" name="name2"><br></td>
        <input type="checkbox" id="anonymus" name="chekbox2" value="anonymus">
        <label for="anonymus"> I would like my gift to remain anonymous.</label><br>
        <input type="checkbox" id="matchingGift" name="chekbox2" value="matchingGift">
        <label for="matchingGift">My employer offers a matching gift program. I would mail the matching gift program.</label><br>
        <input type="checkbox" id="save" name="chekbox2" value="save">
        <label for="save">Please save the cost of acknowledging this gift by not making a thankyou letter.</label><br>
        <table>
            <tr>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <td><label for="comment"><b>Comments: </b><br>(please type any questions or feedbackㅤㅤ<br> here.) </label><br></td>
                <td><input type="text" class="commentBox" id="comment" name="comment"></td>
            </tr>
            <tr>
                <td><label for="howToContact"><b>How may we contact you?: </b></label></td>
                <td><input type="checkbox" id="con.email" name="email3" value="email3">
                    <label for="con.email"> Email</label><br>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="checkbox" id="con.postmail" name="email3" value="postmail2">
                    <label for="con.postmail"> Post Mail</label><br>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="checkbox" id="con.telephone" name="email3" value="telephone">
                    <label for="con.telephone"> Telephone</label><br>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="checkbox" id="con.fax" name="email3" value="fax2">
                    <label for="con.fax"> Fax</label>
                </td>
            </tr>
        </table>
        <p style="color: rgb(105, 105, 105);">I would like to receive newsletters and information about special events by:</p>
        <table>
            <tr>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <!-- <td>ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</td> -->
                <td><input type="checkbox" id="con.email2" name="email232" value="con.email2">
                    <label for="con.email2"> Email</label><br>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="checkbox" id="con.postmail2" name="postmail2" value="con.postmail2">
                    <label for="con.postmail2"> Post Mail</label><br>
                </td>
            </tr>
        </table>
        <input type="checkbox" id="volunteer" name="volunteer" value="volunteer">
        <label for="volunteer"> I would like information about volunteering with the organization</label><br>
        <line></line>
        <label>ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</label>
        <input type="reset">
        <input type="submit" value="Continue" name="continue"><br><br>
        <p><img src="lock.jpg" width="20px"> Donate online with confidence. You are on a secure server.</p>
        <p>If you have any problems or questions please contact <a href="https://www.Aiub.com" style="color: rgb(105, 105, 105);">support.</a></p>
    </form>

    <script src="main.js"></script>
    <script>
        function valid(){
    // event.preventDefault();
    // event.preventDefault();
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var add1 = document.getElementById("add1").value;
    var city = document.getElementById("city").value;
    var state = document.getElementById("state").value;
   
   


    if (fname == "") {
        alert("First Name must be filled out");
        return false;
    }
    if (lname == "") {
        alert("lname Name must be filled out");
        return false;
    }

    if (add1 == "") {
        alert("add1 Name must be filled out");
        return false;
    }



    return true;
}
    </script>
</body>

</html>