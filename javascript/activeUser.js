function show() {
    let enterEmail = document.getElementById('Active');
    enterEmail.innerHTML = '<br><input type="email" id="email" class="input_box" placeholder="enter user email"/>';
    let submit = document.getElementById('Activeclick');
    submit.innerHTML = '<br><input type="submit" id="Submit" class="Submit" onclick="ActiveUser()">';
}

function ActiveUser() {
    let email = document.getElementById("email").value;
    if (email === "") {
        alert("Enter the User email properly");
        return false;
    }

    let std = {
        Email: email,
    };
    let E_data = JSON.stringify(std);

    let xhttp = new XMLHttpRequest();

    xhttp.open("POST", "../models/modelfunctionalOperationAdmin.php?act=ActiveUser", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            let response = JSON.parse(xhttp.responseText);

            if (response.status === 'success') {
                document.getElementById("showmsg").innerHTML = response.message;
            } else {
                document.getElementById("showmsg").innerHTML = response.message;
            }
        }
    };

    xhttp.send("email=" + E_data);
}