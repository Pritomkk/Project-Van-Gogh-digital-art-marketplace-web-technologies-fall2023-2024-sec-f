<?php

require_once('../models/modelApproveArtist_User.php');

if (isset($_POST['UserName'], $_FILES['image'])) 
{
    $UserName=$_POST['UserName'];
    $image = $_FILES["image"];

    if ($image['error'] !== UPLOAD_ERR_OK) 
    {
        echo "File upload failed. Error code: " . $image['error'];
    } 
    else {
        $imageName = $image["name"];
        $imageSize = $image["size"];
        $tmpName = $image["tmp_name"];
        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = pathinfo($imageName, PATHINFO_EXTENSION);

        if (!in_array($imageExtension, $validImageExtension)) {
            echo "Invalid Image Extension";
        } elseif ($imageSize > 4000000) {
            echo 'Image Size Is Too Large';
        } else {
            $destinationPath = '../assets/' . $imageName;

            if (move_uploaded_file($tmpName, $destinationPath)) {
                if (verificationUser($UserName, $destinationPath)) {
                    echo "Successfully added document.";
                } else {
                    echo "Verification failed. Try again.";
                }
            } else {
                echo "File upload failed.";
            }
        }
    }
}
 else {
    echo "Invalid request.";
}
?>
