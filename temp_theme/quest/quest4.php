<?php
    include('../includes/functions.php');
    include('qsessioncheck.php');

    
    // MAKE SURE THERE IS SOMETHING TO LOOK AT
    if(isset($_REQUEST['quest'])){
        $questID = $_REQUEST['quest'];       
    }else{
        header('locaton:'.SITE_ROOT.'quest/');
    }
    
    
    //CONNECT TO THE WORLD
    @mysql_selectdb(SQL_WORLD_DATABASE) or
        die("Bad Database");
        
    //FIND OUR NPC ID- (INVOLVED RELATION = TAKER)
    $sql = "SELECT * FROM creature_involvedrelation WHERE quest='$questID'";
    $sql = mysql_query($sql) or die("Bad query: $sql<br/>".mysql_error());
    
    //LOAD THE RESULTS
    $result = mysql_fetch_array($sql);
    
    //FLAG FOR GIVER VS TAKER
    $giver = -1;
   
    
    echo "<center>QUEST TAKER</center><p/>";
    include('questcreature.php');
?>
<html>
    <head>
         <link rel="stylesheet" href="../scripts/tcata.css" type="text/css">
    </head>
</html>