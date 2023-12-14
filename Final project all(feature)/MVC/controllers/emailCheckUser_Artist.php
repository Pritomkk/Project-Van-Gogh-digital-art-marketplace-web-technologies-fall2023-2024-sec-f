<?php

require_once('../models/model_emailCheck.php');

if (isset($_GET['email_'])) {
    $email = $_GET['email_'];

    $isAvailable = checkEmailAvailabilityUser($email);

    if ($isAvailable) {
        echo "Email is available";
    } else {
        echo "Email is not available";
    }
}


?>