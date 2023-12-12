<?php

require_once('db.php');

function s_m_support_Artist_to_Admin($ArtistMsg, $UserName) 
{
    $con = getConnection();
    $ArtistMsg = mysqli_real_escape_string($con, $ArtistMsg); 
    $Alert_message_for_Admin="$UserName Send A New Message";
    $query = "INSERT INTO supportsystem (Messages, UserName,AlertMessage) VALUES ('$ArtistMsg','$UserName','$Alert_message_for_Admin')";
     if (mysqli_query($con, $query)) 
    {
        return true;
    } else {
        return false; 
    }
}

function loadalert_Messages_from_user() 
{
    $con = getConnection();
    $result = mysqli_query($con, "SELECT * FROM supportsystem");

    $Message = array();
    while ($row = mysqli_fetch_assoc($result)) 
    {
        $Message[] = $row;
    }

    return $Message;
}


function s_m_support_Admin_to_User($AdminMsg, $UserName) {
    $con = getConnection();
    $AdminMsg = mysqli_real_escape_string($con, $AdminMsg);
    $Alert_message_for_User = "Admin Send A New Message";
    $getLatestIdQuery = "SELECT MAX(id) AS latestId FROM supportsystem WHERE UserName = '$UserName'";
    $latestIdResult = mysqli_query($con, $getLatestIdQuery);

    if ($latestIdRow = mysqli_fetch_assoc($latestIdResult)) 
    {
        $latestId = $latestIdRow['latestId'];
        $updateQuery = "UPDATE supportsystem SET AdminMessagesforUser = '$AdminMsg', 
        AlertMessageforUser = '$Alert_message_for_User' WHERE id = '$latestId'";
        
        if (mysqli_query($con, $updateQuery)) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}


function load_User_Message($UserName)
{
    $con = getConnection();
    $UserName = mysqli_real_escape_string($con, $UserName); 
    $result = mysqli_query($con, "SELECT Messages FROM supportsystem WHERE UserName='$UserName'");

    $Message = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $Message[] = $row;
    }

    mysqli_close($con);

    return $Message;
}



function load_Admin_Message($UserName)
{
    $con = getConnection();
    $UserName = mysqli_real_escape_string($con, $UserName); 
    $result = mysqli_query($con, "SELECT AdminMessagesforUser FROM supportsystem WHERE UserName='$UserName'");

    $Message = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $Message[] = $row;
    }

    mysqli_close($con);

    return $Message;

}

?>