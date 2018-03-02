console.log("yo");

document.getElementById("userForm").onsubmit = checkForm;

function checkForm() {

    let uid = document.getElementById("username").value;
    let password = document.getElementById("pw").value;
    let int1 = document.getElementById("item1Q").value;
    let int2 = document.getElementById("item2Q").value;
    let int3 = document.getElementById("item3Q").value;
    let shipment = document.getElementById("ship").value;
    var emailtester = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

    if(emailtester.test(uid) == false) {
        alert("Invalid email address.");
        console.log("blah1");
        //window.history.back();
        return false;
    }else if(password == "") {
        alert("Invalid password.");
        console.log("blah2");
        //window.history.back();
        return false;
    }else if(!(int1 >= 0 && int2 >= 0 && int3 >= 0)) { 
        alert("Please buy something.");
        console.log("blah3");
        //window.history.back();
        return false;
    }else if(shipment == "none") {
        alert("Please choose a shipment.");
        console.log("blah4");
        //window.history.back();
        return false;
    } else {
        console.log("clear");
        return true;
    }
}