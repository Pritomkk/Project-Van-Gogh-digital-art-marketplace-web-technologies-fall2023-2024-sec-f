function searchUsers() {
    let searchQuery = document.getElementById("violationSearch").value;
    let xhttp = new XMLHttpRequest();
    xhttp.open("GET", "../Model/modelAdmin.php?act=adminaction&searchQuery=" + encodeURIComponent(searchQuery), true);

    xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("searchResults").innerHTML = xhttp.responseText;
        }
    };
    xhttp.send();
}

function show() {
    let enterEmail = document.getElementById('suspend');
    enterEmail.innerHTML = '<br><input type="email" id="email" placeholder="enter user email"/>';
    let submit = document.getElementById('suspendclick');
    submit.innerHTML = '<br><input type="submit" id="Submit" onclick="SuspendUser()">';
}

function SuspendUser() {
    let email = document.getElementById("email").value;
    if(email==="")
    {
        alert("Enter the User email Properly");
        return false;
    }
    let xhttp = new XMLHttpRequest();

    xhttp.open("POST", "../Model/modelfunctionalOperationAdmin.php?act=suspendUser", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("showmsg").innerHTML = xhttp.responseText;
        }
    };

    xhttp.send("email=" + encodeURIComponent(email));
}

