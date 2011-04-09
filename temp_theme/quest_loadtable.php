<?php
    
    // LOADS THE WORLD DB THEN USING QUESTID PULLS REQUESTED QUEST

    @mysql_selectdb(SQL_WORLD_DATABASE) or
        die("Cannot load database in loadqtable.php");
    
    // CREATE SQL SEARCH STRING
    $sql = "SELECT * FROM quest_template WHERE entry='$questID'";
    $sql = @mysql_query($sql) or die("Bad Query:$sql<br/>".mysql_error());
    
    //LOAD THE RESULTS
    $result = mysql_fetch_array($sql) or die("Bad Results:<br/>".mysql_error());
    
?>