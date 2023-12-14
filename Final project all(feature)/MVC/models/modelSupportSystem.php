<?php

require_once('db.php');

function s_m_support_artist_to_admin($artistMsg, $userName) 
{
    $con = getConnection();
    $artistMsg = mysqli_real_escape_string($con, $artistMsg); 
    $alertMessageForAdmin = "$userName Send A New Message";
    $query = "INSERT INTO supportsystem (messages, userName, alertMessage) VALUES ('$artistMsg','$userName','$alertMessageForAdmin')";
    
    if (mysqli_query($con, $query)) 
    {
        return true;
    } else {
        return false; 
    }
}

function loadAlertMessagesFromUser() 
{
    $con = getConnection();
    $result = mysqli_query($con, "SELECT * FROM supportsystem");

    $message = array();
    while ($row = mysqli_fetch_assoc($result)) 
    {
        $message[] = $row;
    }

    return $message;
}

function s_m_support_admin_to_user($adminMsg, $userName) 
{
    $con = getConnection();
    $adminMsg = mysqli_real_escape_string($con, $adminMsg);
    $alertMessageForUser = "Admin Send A New Message";
    $getLatestIdQuery = "SELECT MAX(id) AS latestId FROM supportsystem WHERE userName = '$userName'";
    $latestIdResult = mysqli_query($con, $getLatestIdQuery);

    if ($latestIdRow = mysqli_fetch_assoc($latestIdResult)) 
    {
        $latestId = $latestIdRow['latestId'];
        $updateQuery = "UPDATE supportsystem SET AdminMessagesforUser  = '$adminMsg', 
       	AlertMessageforUser = '$alertMessageForUser' WHERE id = '$latestId'";
        
        if (mysqli_query($con, $updateQuery)) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function loadUserMessages($userName)
{
    $con = getConnection();
    $userName = mysqli_real_escape_string($con, $userName); 
    $result = mysqli_query($con, "SELECT messages FROM supportsystem WHERE userName='$userName'");

    $message = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $message[] = $row;
    }

    mysqli_close($con);

    return $message;
}

function loadAdminMessages($userName)
{
    $con = getConnection();
    $userName = mysqli_real_escape_string($con, $userName); 
    $result = mysqli_query($con, "SELECT AdminMessagesforUser FROM supportsystem WHERE userName='$userName'");

    $message = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $message[] = $row;
    }

    mysqli_close($con);

    return $message;
}

?>
