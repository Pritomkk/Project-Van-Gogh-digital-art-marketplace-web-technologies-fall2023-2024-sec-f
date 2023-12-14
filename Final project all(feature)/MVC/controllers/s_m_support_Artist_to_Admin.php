<?php
require_once('../controllers/SessionCheck.php');
require_once('../controllers/CookieCheck.php');
require_once('../models/modelSupportSystem.php');

$UserName = $_SESSION['UserName'];

if (isset($_POST['Messages'])) {
    $Messages = $_POST['Messages'];

    $result = s_m_support_Artist_to_Admin($Messages, $UserName);

    if ($result) 
    {
        echo "Message sent successfully";
    } 
    else {
        echo "Error sending message";
    }
} else {
    echo "Invalid parameters";
}
?>
