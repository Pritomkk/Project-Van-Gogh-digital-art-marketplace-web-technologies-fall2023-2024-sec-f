<?php
require_once("../models/modelSupportSystem.php");
$UserName = $_GET['UserName'];
$load_Admin_Message = load_Admin_Message($UserName);

foreach ($load_Admin_Message as $Message) 
{
    $load_Admin_Message = $Message['AdminMessagesforUser'];
    echo "<br> ";
    echo $load_Admin_Message;
}

?>