<?php
require_once('../models/modelAdmin.php');

if (isset($_REQUEST['Username'])) {
    $username= $_REQUEST['Username'];
    $success = deleteUserArtist($username);

    if ($success) 
    {
        header('location:../views/Delete_Userinfo.php');
    } 
    else {
        echo "Error deleting user.";
    }
} else {
    echo "Invalid request.";
}
