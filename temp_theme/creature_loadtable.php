<?php
    
    // LOADS THE WORLD DB THEN USING QUESTID PULLS REQUESTED QUEST

    @mysql_selectdb(SQL_WORLD_DATABASE) or
        die("Cannot load database in loadctable.php");
    
    // CREATE SQL SEARCH STRING
    $sql = "SELECT * FROM creature_template WHERE entry='$creatureID'";
    $sql = @mysql_query($sql) or die("Bad Creature Query:$sql<br/>".mysql_error());
    
    //LOAD THE RESULTS
    $result = mysql_fetch_array($sql) or die("Bad Creature Results:<br/>".mysql_error());
    
?>