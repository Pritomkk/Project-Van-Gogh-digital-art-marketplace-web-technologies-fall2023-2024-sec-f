<?php
require_once("../models/modelSupportSystem.php");
$UserName = $_GET['UserName'];
$load_User_Message =loadUserMessages($UserName);

foreach ($load_User_Message as $Message) 
{
    $UserMessage = $Message['messages'];
    echo "<br> ";
    echo "=>". $UserMessage;
}

?>

