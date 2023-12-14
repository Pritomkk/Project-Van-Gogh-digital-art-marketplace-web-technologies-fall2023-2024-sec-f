<?php
    require_once("../models/modelApproveArtist_User.php");
    $NewNotice = ApprovalNewNoticeUser();

    foreach ($NewNotice as $Notice) {
        $Username = $Notice['userName'];
        echo "<div id='{$Username}'>";
        echo $Notice['message'] . "&nbsp; ";
        
        echo "<button id='approveButton_{$Username}' onclick='approveNotice(\"{$Username}\")'>Approve</button> &nbsp; &nbsp;";

        echo "<button id='disapproveButton_{$Username}' onclick='disapproveNotice(\"{$Username}\")'>Disapprove</button><br><br>";
        
        echo "</div>";
    }
    
    ?>
    <script src="../assets/js/User_verification_ap.js"> </script>