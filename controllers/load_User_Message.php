<?php
require_once("../models/modelSupportSystem.php");
$UserName = $_GET['UserName'];
$load_User_Message = load_User_Message($UserName);

foreach ($load_User_Message as $Message) 
{
    $UserMessage = $Message['Messages'];
    echo "<br> ";
    echo "=>". $UserMessage;
}

?>

