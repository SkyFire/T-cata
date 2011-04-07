<?php
// MAKE SURE THERE IS SOMETHING TO LOOK AT
    if(isset($_REQUEST['quest'])){
        
        // SET SESSION SO THE MENU'S KNOW WHATS UP
        $questID = $_REQUEST['quest'];
        //$_SESSION['quest'] = $questID;
    }else{
        
        // IF NOT SEND THEM TO HOME QUEST TO SEARCH
        header('locaton:'.SITE_ROOT.'quest/');
    }
?>