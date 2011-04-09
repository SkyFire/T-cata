<?php
function sqlUpdate($Entry,$FieldName,$UserValue){
    //UPDATE THE DATABASE
    $sql1 = "UPDATE quest_template SET $FieldName = '$UserValue' WHERE entry=$Entry";
    $sql = mysql_query($sql1) or die("Bad Query:$sql1<br/>".mysql_error());
      
    //SAVE TO A TEXT FILE FOR DISPLAY CHANGES
    //date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
    $fn = date(F_j_Y-g.ia).'.txt';
    $fh=fopen($fn,"a+");
    fwrite($fh,date("D M j G:i:s")." - UPDATE `quest_template` SET `$FieldName` = $UserValue WHERE `entry`=$Entry" .";\n");
    fclose($fh);
}

//LOAD INFORMATION ABOUT SELECTED QUEST USING THE ID
function quest($questID){
    $sql = "SELECT * FROM quest_template WHERE entry=$questID";
    $sql = mysql_query($sql) or die("Bad Quest Query:$sql<br/>".mysql_error());
    $quest = mysql_fetch_array($sql) or die("Bad Quest Fetch Error:<br>".mysql_error());
    return $quest;
}
?>