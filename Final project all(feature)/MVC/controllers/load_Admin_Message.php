<?php
require_once("../models/modelSupportSystem.php");
$UserName = $_GET['UserName'];
$load_Admin_Message =loadAdminMessages($UserName);

foreach ($load_Admin_Message as $Message) 
{
    $Admin_Message = $Message['AdminMessagesforUser'];
    echo "<br> ";
    echo $Admin_Message;
}

?>