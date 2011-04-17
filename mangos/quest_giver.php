<?php
    
    include('init.php');
    //GET THE ID SENT
    $questID = $_REQUEST['quest'];
    $quest = quest($questID);
    
    //CONNECT TO THE WORLD
    @mysql_selectdb(SQL_WORLD_DATABASE) or
        die("Bad Database IN quest_giver.php".mysql_error());
        
    //FIND OUR NPC ID- (QUESTRELATION = GIVER)
    $sql = "SELECT * FROM creature_questrelation WHERE quest='$questID'";
    $sql = mysql_query($sql) or die("Bad query: $sql<br/>".mysql_error());
    
    //LOAD THE RESULTS
    $result = mysql_fetch_array($sql);
    
    //FLAG FOR A GIVER
    $giver = 1;
    
    //GO TO COMMON QUEST CREATURS
    header('location:quest_creatures.php?quest='.$questID.'&npc='.$result['id']);

?>