<?php
require_once('../Controller/SessionCheck.php');
require_once('../Model/modelApproveArtist_User.php');

$FirstName = $_SESSION['FirstName'];
$LastName = $_SESSION['LastName'];
$UserType = $_SESSION['UserType'];
$UserName = $_SESSION['UserName'];

$verificationStatus = Show_Verification_Status_Artist($UserName);
echo $verificationStatus;
?>




