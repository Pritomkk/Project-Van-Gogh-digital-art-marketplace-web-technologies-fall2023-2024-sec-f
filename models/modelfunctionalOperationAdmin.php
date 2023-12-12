<?php
 require_once('db.php');
 require_once('../models/model.php');

 function searchInfo($searchQuery)
 {
     $con = getConnection();
     $sql = "SELECT UserName, varification_doc FROM userartist WHERE UserName = '$searchQuery' "; 
     $result = mysqli_query($con, $sql); 
 
     $users = [];
 
     while ($user = mysqli_fetch_assoc($result)) {
         array_push($users, $user);
     }
 
     return $users;
 }
 function suspendUser() 
 {
     if (isset($_POST['email']))
     {
         $email = $_POST['email'];
         $info = json_decode($email); 
        
         $S_Email=$info->Email;
 
         $con = getConnection();
         

         $result = mysqli_query($con, "SELECT * FROM userartist WHERE Email = '$S_Email'");
        
         if ($result && mysqli_num_rows($result) > 0) 
         {
             mysqli_query($con, "UPDATE userartist SET Status = 'suspended' WHERE Email = '$S_Email'");
 
             $response = array('status' => 'success', 'message' => 'User suspended successfully.');
         }
         else 
         {
             $response = array('status' => 'error', 'message' => 'User not found.');
         }
 
         echo json_encode($response);
     }
}
 

if (isset($_GET['act']) && $_GET['act'] === 'suspendUser') 
{
    suspendUser();
}


function ActiveUser() 
 {
     if (isset($_POST['email']))
     {
         $email = $_POST['email'];
         $info = json_decode($email); 
        
         $S_Email=$info->Email;
 
         $con = getConnection();
         

         $result = mysqli_query($con, "SELECT * FROM userartist WHERE Email = '$S_Email'");
        
         if ($result && mysqli_num_rows($result) > 0) 
         {
             mysqli_query($con, "UPDATE userartist SET Status = 'Active' WHERE Email = '$S_Email'");
 
             $response = array('status' => 'success', 'message' => 'User Active successfully.');
         }
         else 
         {
             $response = array('status' => 'error', 'message' => 'User not found.');
         }
 
         echo json_encode($response);
     }
}
 

if (isset($_GET['act']) && $_GET['act'] === 'ActiveUser') 
{
    ActiveUser() ;
}




?>



