<?php

require_once('../Model/modelSupportSystem.php');

if (isset($_POST['Messages']) && isset($_POST['UserName'])) 
{
    $Messages = urldecode($_POST['Messages']);
    $UserName = urldecode($_POST['UserName']);

    $result =s_m_support_Admin_to_User($Messages, $UserName);

    if ($result) {
        echo "Message sent successfully";
    } else {
        echo "Error sending message";
    }
} else {
    echo "Invalid parameters";
}
?>

