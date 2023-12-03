<?php
 require_once('db.php');
 require_once('../Model/model.php');

 function adminaction() {
    $searchQuery = $_GET['searchQuery'];  

    $con = getConnection();

    $sql = "SELECT * FROM userartist WHERE Email LIKE '%$searchQuery%'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<p>" . $row['email'] . "</p>";
        }
    }
}


function suspendUser() {
    $email = $_POST['email']; 
    $con = getConnection();
    $result = mysqli_query($con, "SELECT * FROM userartist WHERE Email = '$email'");

    if ($result && mysqli_num_rows($result) > 0) {
        mysqli_query($con, "UPDATE userartist SET Status = 'suspended' WHERE Email = '$email'");
        echo "User suspended successfully.";
    } else {
        echo "User not found.";
    }
}

if (isset($_GET['act']) && $_GET['act'] === 'suspendUser') {
    suspendUser();
}




?>



