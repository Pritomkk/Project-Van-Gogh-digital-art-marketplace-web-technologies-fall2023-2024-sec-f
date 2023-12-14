function varification_artist() {
    let UserName = document.getElementById("UserName").value;
    let image = document.getElementById('image').files[0];

    if (!image) {
        alert("Please provide an image");
        return false;
    }

    if (image.size > 4000000) {
        alert("Image size is too large");
        return false;
    }

    let formData = new FormData();
    formData.append('UserName', UserName);
    formData.append('image', image);

    let xhttp = new XMLHttpRequest();

    xhttp.open("POST", "../controllers/Artist_varification_Check.php", true);

    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("Showmsg").innerHTML = xhttp.responseText;
        }
    };

    xhttp.send(formData);
}
