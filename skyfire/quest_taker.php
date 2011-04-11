<?php
    
    include('include/functions.php');
    include('include/config.php');
    include('lang/en.php');
    
    //GET THE ID SENT
    $questID = $_REQUEST['quest'];
    $quest = quest($questID);
    
    //CONNECT TO THE WORLD
    @mysql_selectdb(SQL_WORLD_DATABASE) or
        die("Bad Database IN quest_taker.php".mysql_error());
     
        
    //FIND OUR NPC ID
    $sql = "SELECT * FROM creature_involvedrelation WHERE quest='$questID'";
    $sql = mysql_query($sql) or die("Bad query: $sql<br/>".mysql_error());
    
    //LOAD THE RESULTS
    $result = mysql_fetch_array($sql);
    
    //FLAG FOR A GIVER
    $giver = -1;
    
    $who = Q_TAKER;
    
    
    //GO TO COMMON QUEST CREATURS
    include('quest_creatures.php');

?>