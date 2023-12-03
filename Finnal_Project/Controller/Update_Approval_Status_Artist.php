<?php
require_once("../Model/modelApproveArtist_User.php");

if (isset($_GET['UserName']) && isset($_GET['status'])) {
    $UserName = urldecode($_GET['UserName']);
    $status = urldecode($_GET['status']);

    $result = Update_Approval_Status_Artist($status, $UserName);

    if ($result) {
        echo "Status updated successfully";
    } else {
        echo "Error updating status";
    }
} else {
    echo "Invalid parameters";
}
?>