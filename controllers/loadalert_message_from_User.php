<?php
    require_once("../models/modelSupportSystem.php");
    $Alert_Message= loadalert_Messages_from_user();

    foreach ($Alert_Message as $Message) 
    {
        $Alert_Message = $Message['AlertMessage'];
        $UserName = $Message['UserName'];
        echo"<br> ";
        echo "<div id='{$UserName}'>";
        echo $Message['AlertMessage'] . "&nbsp; ";   
        echo "<button id='NewConversation_{$UserName}' onclick='NewConversation(\"{$UserName}\")'>StartConversation</button>  ";
        echo "</div>";
    }
    
    
    ?>
    <script src="../javascript/Support_System.js"> </script>
