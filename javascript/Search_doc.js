function searchinfo(event) {
    let info = document.getElementById("info");
    let searchQuery = document.getElementById("infobtn").value;

    let std = {
        User_name: searchQuery,
    };

    let data = JSON.stringify(std);

    let xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../controllers/search_doc.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let std = JSON.parse(this.responseText);

            
            if (std.length > 0) 
            {
                for (let i = 0; i < std.length; i++)    
                 {
                    info.innerHTML += "User_Name: " + std[i].UserName +
                    "<br>Verification document: <br><img src='" + std[i].varification_doc + "' alt='not upload '><br>";
                    
            }
            }
             else 
             {
                info.innerHTML = "No results found.";
                    return false;
            }

        }
    };

    xhttp.send("info=" + data);
}
