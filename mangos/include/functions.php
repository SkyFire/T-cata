<?php

/**
 * USE THIS TO BUILD THE WEBPAGE
 * if_file = the iframe file to include
 * 
 * */
function build_page($main_view,$sub_menu)
{
    
    include('page.parts/header.php');
    include('page.parts/page_content_top.php');
    include("tables/$main_view.php");
    include('page.parts/page_content_mid.php');
    include("mnu/$sub_menu.php");
    include('page.parts/page_content_mid2.php');
    include('page.parts/footer.php');
    
}

/**
 *RETURN USER INFO FROM AUTH.ACCOUNT
 **/
function account($id)
{
    mysql_selectdb(SQL_AUTH_DATABASE);
    $query = "SELECT * FROM `account` WHERE `id` = $id";
    $sql = mysql_query($query);
    return mysql_fetch_array($sql);
    
}

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

    //SAVES CHANGES TO A TEXT FILE, DATA IS SQL QUERY
    //FILENAME IS THE NAME TO SAVE/APPEND IT TO
    function saveSQL($data,$filename,$remark)
    {
        $handle = fopen($filename,"a");
            fwrite($handle,"-- --".date("D M j G:i:s")." $remark\n ".$data."\n");
        fclose($handle);
    }
    
    /**
     * USERDATA IS POST INFORMATION, RESULT= CURRENT DATA PULLED, TABLE CURRENTLY
     * UPDATING,WHERE CLAUSE USED FOR 'WHERE = $WHERE_CLAUSE' WHERE_REF = WHAT LINE
     * WE ARE UPDATING, REMARKS FOR THE SAVE FILE, TEXT=BOOLEAN(1,0) FOR THE SQL FORMAT
     * OF WHERE_REF NUMBERS DON'T NEED ', TEXT DO.
     * */
function updateRecords($userData,$result,$database,$table,$where_clause,$where_reference,$remarks)
{
    mysql_selectdb($database);
        
    foreach($userData as $field => $userInfo)
    {
           
        if(
            $userInfo > "" &&
            $field != "XXX" &&
            $field != "submit")
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
                    $query = "UPDATE `$table` SET `$field` = -1 WHERE `$where_clause` = $where_reference";
                    $sql = mysql_query($query) or die ("Bad Query:$query<br>".mysql_error());
                }else{
                    $query = "UPDATE `$table` SET `$field` = ".array_sum($userInfo)." WHERE `$where_clause` = $where_reference";
                    $sql = mysql_query($query) or die ("Bad Query:$query<br>".mysql_error());
                        
                }
            }else{
                
                //ONLY UPDATE IF SOMETHING CHANGED
                if($userInfo != $result[$field])
                {
                    $query = "UPDATE `$table` SET `$field` = $userInfo WHERE `$where_clause` = $where_reference";
                    $sql = mysql_query($query) or die ("Bad Query:$query<br>".mysql_error());
                    saveSQL($query,$table.'_update.sql',$remarks);
                }
            }
        }
    }    
}
?>