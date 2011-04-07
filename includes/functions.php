<?php
function sqlUpdate($Entry,$FieldName,$UserValue){
        //UPDATE THE DATABASE
        $sql = "UPDATE quest_template SET $FieldName = '$UserValue' WHERE entry=$Entry";
        $sql = @mysql_query($sql) or die("Bad Query:$sql<br/>".mysql_error());
        
        //SAVE TO A TEXT FILE FOR DISPLAY CHANGES
        $fh=fopen("quest_template.txt","a+");
        fwrite($fh,date("l dS of F Y h:i:s A").$sql."\n");
        fclose($fh);
    }
    
?>