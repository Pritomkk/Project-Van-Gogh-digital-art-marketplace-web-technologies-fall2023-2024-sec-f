function show1() 
{

    window.location.href="../View/User_varification.php";
     
}

function show2() 
{
   let show_verificatio_status=document.getElementById("Show_verification_message")

   if(show_verificatio_status.style.display === "none" ||show_verificatio_status.style.display === "")
   {
    let xhttps=new XMLHttpRequest()
    xhttps.open('GET',"../Controller/Show_Verification_Status_U.php",true)

    xhttps.onreadystatechange = function () {
        if (xhttps.readyState == 4 && xhttps.status == 200) {
           show_verificatio_status.innerHTML = xhttps.responseText;
           show_verificatio_status.style.display = "block";
        }
    };

    xhttps.send();

   }

   else {
    show_verificatio_status.style.display = "none";
}

       
}

function show3() 
{

    window.location.href="../View/changepassword.php";
     
}

function show4() 
{

    window.location.href="../Controller/Logout.php";
     
}

function show5() 
{

    window.location.href="../View/Support_User_to_admin.php";
     
}



