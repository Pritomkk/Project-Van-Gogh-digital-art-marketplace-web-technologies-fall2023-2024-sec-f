<?php
    require_once("../models/modelSupportSystem.php");
    $Alert_Message= loadalertMessagesfromuser();

    foreach ($Alert_Message as $Message) 
    {
        $Alert_Message = $Message['AlertMessage'];
        $UserName = $Message['userName'];
        echo"<br> ";
        echo "<div id='{$UserName}'>";
        echo $Message['AlertMessage'] . "&nbsp; ";   
        echo "<button id='NewConversation_{$UserName}' onclick='NewConversation(\"{$UserName}\")'>StartConversation</button>  ";
        echo "</div>";
    }
    
    
    ?>
    <script src="../assets/Support_System.js"> </script>
