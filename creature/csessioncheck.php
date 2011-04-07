<?php
// MAKE SURE THERE IS SOMETHING TO LOOK AT
    if(isset($_REQUEST['npc'])){
        
        // SET SESSION SO THE MENU'S KNOW WHATS UP
        $creatureID = $_REQUEST['npc'];
        //$_SESSION['quest'] = $questID;
    }else{
        
        // IF NOT SEND THEM TO HOME QUEST TO SEARCH
        header('locaton:'.SITE_ROOT.'creature/');
    }
?>