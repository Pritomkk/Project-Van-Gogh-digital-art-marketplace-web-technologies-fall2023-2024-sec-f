<?php
require_once('../models/modelfunctionalOperationAdmin.php');
if (isset($_POST['info'])) 
{
    $std = $_POST['info'];

    $info = json_decode($std);
    $searchQuery = $info->User_name;
    $result = searchInfo($searchQuery);

    echo json_encode($result);
}

?>