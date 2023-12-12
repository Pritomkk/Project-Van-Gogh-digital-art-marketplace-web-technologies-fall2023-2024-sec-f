<?php
require_once('../controllers/SessionCheck.php');
require_once('../models/modelApproveArtist_User.php');

$FirstName = $_SESSION['FirstName'];
$LastName = $_SESSION['LastName'];
$UserType = $_SESSION['UserType'];
$UserName = $_SESSION['UserName'];

$verificationStatus =Show_Verification_Status_User($UserName);
echo $verificationStatus;
?>
