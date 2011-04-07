<?php
    include('qsessioncheck.php');
    
    //CONNECT TO THE WORLD
    @mysql_selectdb(SQL_WORLD_DATABASE) or
        die("Bad Database");
        
    //FIND OUR NPC ID- (QUESTRELATION = GIVER)
    $sql = "SELECT * FROM creature_questrelation WHERE quest='$questID'";
    $sql = mysql_query($sql) or die("Bad query: $sql<br/>".mysql_error());
    
    //LOAD THE RESULTS
    $result = mysql_fetch_array($sql);
    
    //FLAG FOR A GIVER VS TAKER
    $giver = 1; 
    
   
    
    echo "<center>QUEST GIVER</center><p/>";
    include('questcreature.php');
?>
<html>
    <head>
         <link rel="stylesheet" href="../scripts/tcata.css" type="text/css">
    </head>
</html>