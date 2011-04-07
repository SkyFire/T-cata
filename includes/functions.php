<?php
function sqlUpdate($Entry,$FieldName,$UserValue){
        //UPDATE THE DATABASE
        $sql1 = "UPDATE quest_template SET $FieldName = '$UserValue' WHERE entry=$Entry";
        $sql = mysql_query($sql1) or die("Bad Query:$sql1<br/>".mysql_error());
        
        //SAVE TO A TEXT FILE FOR DISPLAY CHANGES
        $fh=fopen("quest_template.txt","a+");
        fwrite($fh, $sql1."\n");
        fclose($fh);
    }
    
?>