<?php
    require_once("../Model/modelApproveArtist_User.php");
    $NewNotice = ApprovalNewNotice_User();

    foreach ($NewNotice as $Notice) {
        $Username = $Notice['UserName'];
        echo "<div id='{$Username}'>";
        echo $Notice['message'] . "&nbsp; ";
        
        echo "<button id='approveButton_{$Username}' onclick='approveNotice(\"{$Username}\")'>Approve</button> &nbsp; &nbsp;";

        echo "<button id='disapproveButton_{$Username}' onclick='disapproveNotice(\"{$Username}\")'>Disapprove</button><br><br>";
        
        echo "</div>";
    }
    
    ?>
    <script src="../javascript/User_verification_ap.js"> </script>