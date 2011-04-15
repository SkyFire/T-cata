<?php
/*
function sqlUpdate($Entry,$FieldName,$UserValue){
    //UPDATE THE DATABASE
    $sql1 = "UPDATE quest_template SET $FieldName = '$UserValue' WHERE entry=$Entry";
    $sql = mysql_query($sql1) or die("Bad Query in functions sqlUpdate:$sql1<br/>".mysql_error());
      
    //SAVE TO A TEXT FILE FOR DISPLAY CHANGES
    //date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
    $fn = 'sql_updates.txt';
    $fh=fopen($fn,"a+");
    fwrite($fh,date("D M j G:i:s")." - UPDATE `quest_template` SET `$FieldName` = $UserValue WHERE `entry`=$Entry" .";\n");
    fclose($fh);
}

// UPDATE CREATURE DATABASE
// TODO: COMBINE WITH SQLUPDATE
function sqlCUpdate($FieldName,$UserValue){
        //UPDATE THE DATABASE
        $sql1 = "UPDATE creature_template SET $FieldName = '$UserValue' WHERE entry=".$_REQUEST['npc'];
        $sql = mysql_query($sql1) or die("Bad Query:$sql1<br/>".mysql_error());
        
        //SAVE TO A TEXT FILE FOR DISPLAY CHANGES
        $fh=fopen("quest_template.txt","a+");
        fwrite($fh,"UPDATE `creature_template` SET `$FieldName` = $UserValue WHERE `entry`=".$_REQUEST['npc'].";\n");
        fclose($fh);
}
*/

/**
 *RETURN INFORMATION (ARRAY) ABOUT QUEST:questid
 **/
function quest($quest_id)
{
    //CONNECT TO THE WORLD
    @mysql_selectdb(SQL_WORLD_DATABASE) or
        die("Bad Database IN function.quest".mysql_error());
     
    $query = "SELECT * FROM quest_template WHERE entry=$quest_id";
    $sql = mysql_query($query) or die("Bad Quest Query in functions.quest:$query<br/>".mysql_error());
    $quest = mysql_fetch_array($sql);
    return $quest;
}

/**
 *RETURN INFORMATION (ARRAY) ABOUT CREATURE
 **/
function creature($entry_id)
{
    //CONNECT TO THE WORLD
    @mysql_selectdb(SQL_WORLD_DATABASE) or
        die("Bad Database IN function.creature".mysql_error());
     
    $query = "SELECT * FROM creature_template WHERE entry=$entry_id";
    $sql = mysql_query($query) or die("Bad Quest Query in functions.creature:$sql<br/>".mysql_error());
    $creature = mysql_fetch_array($sql);
    return $creature;       
}

/**
 *RETURN THE STRING NAME BASE ON ID
 **/
function itemName($id)
{
    mysql_selectdb(SQL_WORLD_DATABASE);
    $query = mysql_query("SELECT * FROM item_template WHERE entry=$id") or die(mysql_error());
    $sql = mysql_fetch_array($query);
    return $sql['name'];
}

/*
//STRIPRESULTS HOLDS THE FIELD NAME WE ARE WORKING ON
    function stripResults($aline){
        $value = substr($aline,strpos($aline,"result[")+8,strlen($aline));
        $value = substr($value,0,strpos($value,"]")-1);
        return $value;
    }
    
    //READS FILE NAME, UPDATES TABLE WITH USERDATA
    //USED FOR CREATURE ATM
    function parseData($filename,$userdata,$table,$lineInfo, $whereClause){
         mysql_selectdb(SQL_WORLD_DATABASE);
        $sql = mysql_query("SELECT * FROM $table WHERE $whereClause=$lineInfo") or die(mysql_error());
        $result = mysql_fetch_array($sql);
        
        // GRAB THE FILENAME WE ARE PARSING OUT
        $filename = $filename;
        
        //OPEN IT TO READ
        $handle = fopen($filename,"r");
        
        //LOOP IN IT
        while(!feof($handle)){
            
            //GRAB A LINE OF DATA
            $haystack = fgets($handle);
            
            //LOOK FOR THE result[xxx] WHERE xxx WILL BE THE CURRENT DATA
            if(strstr($haystack,"result") > ""){
                
                //GET THE FIELD NAME WE ARE WORKING ON
                $sqlFieldData = stripResults($haystack);
                
                //SEE IF THE POST VALUE IS DIFFERENT FROM THE FEILD VALUE
                //IF IT IS DIFFERENT, THEY CHANGED SOMETHING
                if($userdata != $result[$sqlFieldData]){
                    
                    //UPDATE IT IF IT IS
                    $sql = mysql_query("UPDATE $table SET $sqlFieldData=".$userdata[$sqlFieldData]." WHERE $whereClause=$lineInfo");    
                }
            }//HAYSTACK MATCH
        }//FILE LOOP
        fclose($handle);
    }
 */    
    //SAVES CHANGES TO A TEXT FILE, DATA IS SQL QUERY
    //FILENAME IS THE NAME TO SAVE/APPEND IT TO
    function saveSQL($data,$filename,$remark)
    {
        $handle = fopen($filename,"a");
            fwrite($handle,"-- --".date("D M j G:i:s")." $remark\n ".$data."\n");
        fclose($handle);
    }
    
    // USERDATA = AS PROVIDED BY '$_POST, $RESULT = FROM INIT
    // TABLE WE ARE UPDATING, WHAT COMES AFTER WHERE
    // REREF = WHAT ENTRY VARIABLE i.e. entry_id, id, creature_id etc..
    function updateRecords($userData,$result,$table,$where_clause,$recRef)
    {

        foreach($userData as $field => $userInfo)
        {
           
            if($userInfo > "" && $field != "XXX" && $field != "submit")
            {
                
                //SPECIAL HANDLING OF MULTI SELECT OPTIONS
                // - RACES
                // TODO: USE A SWITCH HERE ON $FIELD
                if($field == "AllowableRace")
                {
                    //SEE IF TOTAL IS 142 OR SUM OF ALL RACES, IF SO SET VALUE
                    //TO -1
                    if(array_sum($userInfo) >= 142){
                        $userInfo = -1;
                        $sql = "UPDATE `$table` SET `$field` = -1 WHERE `$where_clause` = $recRef";
                        $sql1 = mysql_query($sql) or die ("Bad Query:$sql<br>".mysql_error());
                        saveSQL($sql,"SQL_UPDATES.SQL");
                    }else{
                        $sql = "UPDATE `$table` SET `$field` = ".array_sum($userInfo)." WHERE `$where_clause` = $recRef";
                        $sql1 = mysql_query($sql) or die ("Bad Query:$sql<br>".mysql_error());
                        saveSQL($sql,"SQL_UPDATES.SQL");
                        
                    }
                }else{
                
                    //ONLY UPDATE IF SOMETHING CHANGED
                    if($userInfo != $result[$field])
                    {
                        $sql = "UPDATE `$table` SET `$field` = $userInfo WHERE `$where_clause` = $recRef";
                        $sql1 = mysql_query($sql) or die ("Bad Query:$sql<br>".mysql_error());
                        saveSQL($sql,"SQL_UPDATES.SQL");
                    }
                }
            }
        }    
    }
?>