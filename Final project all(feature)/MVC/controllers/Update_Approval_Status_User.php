<?php
require_once("../models/modelApproveArtist_User.php");

if (isset($_GET['UserName']) && isset($_GET['status'])) {
    $UserName = urldecode($_GET['UserName']);
    $status = urldecode($_GET['status']);

    $result = Update_Approval_Status_User($status, $UserName);

    if ($result) {
        echo "Status updated successfully";
    } else {
        echo "Error updating status";
    }
} else {
    echo "Invalid parameters";
}
?>

