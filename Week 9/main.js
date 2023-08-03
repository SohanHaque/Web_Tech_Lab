function valid() {
    event.preventDefault();
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var add1 = document.getElementById("add1").value;
    var city = document.getElementById("city").value;
    var state = document.getElementById("state").value;
    var zip = document.getElementById("zip").value;
    var country = document.getElementById("country").value;
    var Phone = document.getElementById("Phone").value;
    var fax = document.getElementById("fax").value;
    var email = document.getElementById("email").value;
    var none = document.getElementById("none").value;
    var other_ammount = document.getElementById("other_ammount").value;
    var interrested = document.getElementById("interrested").value;
    var ccard = document.getElementById("ccard").value;
    var toHonour = document.getElementById("toHonour").value;
    var inMemoryOf = document.getElementById("inMemoryOf").value;
    var name = document.getElementById("name").value;
    var acknowledge = document.getElementById("acknowledge").value;
    var add = document.getElementById("add").value;
    var city2 = document.getElementById("city2").value;
    var zip2 = document.getElementById("zip2").value;
    var anonymus = document.getElementById("anonymus").value;
    var comment = document.getElementById("comment").value;


    if (fname == "") {
        alert("First Name must be filled out");
        return false;
    }

    if (lname == "") {
        alert("Last Name must be filled out");
        return false;
    }
    if (add1 == "") {
        alert("Address  must be filled out");
        return false;
    }
    if (city == "") {
        alert("city must be filled out");
        return false;
    }
    if (state == "") {
        alert("state must be filled out");
        return false;
    }
    if (zip == "") {
        alert("zip must be filled out");
        return false;
    }
    if (country == "") {
        alert("country must be filled out");
        return false;
    }
    if (Phone == "") {
        alert("Phone must be filled out");
        return false;
    }
    if (fax == "") {
        alert("fax must be filled out");
        return false;
    }
    if (email == "") {
        alert("email must be filled out");
        return false;
    }
    if (other_ammount == "") {
        alert("other_ammount must be filled out");
        return false;
    }
    if (interrested == "") {
        alert("interrested must be filled out");
        return false;
    }
    if (ccard == "") {
        alert("ccard must be filled out");
        return false;
    }
    if (toHonour == "") {
        alert("toHonour must be filled out");
        return false;
    }
    if (inMemoryOf == "") {
        alert("inMemoryOf must be filled out");
        return false;
    }
    if (name == "") {
        alert("name must be filled out");
        return false;
    }
    if (acknowledge == "") {
        alert("acknowledge must be filled out");
        return false;
    }
    if (add == "") {
        alert("add must be filled out");
        return false;
    }
    if (city2 == "") {
        alert("city2 must be filled out");
        return false;
    }
    if (zip2 == "") {
        alert("zip2 must be filled out");
        return false;
    }
    if (anonymus == "") {
        alert("anonymus must be filled out");
        return false;
    }
    if (comment == "") {
        alert("comment must be filled out");
        return false;
    }

    return true;
    
}