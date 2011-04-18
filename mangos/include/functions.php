<?php
    include('arrays.php');
    
function err($query,$mysqlerr)
{
    die("<p/>Bad query:<br/>$query<p/>$mysqlerr");
}

function item($id)
{
    mysql_selectdb(SQL_WORLD_DATABASE);
    $query = "SELECT * FROM `item_template` WHERE `entry` = $id";
    $sql = mysql_query($query) or die("bad query<br>$query<br/>".mysql_error());
    return mysql_fetch_array($sql);
}

/**
 * MULTI : 1=yes, 0=no Used for Multi Select menus
 * SIZE : If multi, size shown, if MULIT=0, this is ignored
 * NAME: var for editing.
 * RESULT: original source, usually $RESULT
 * */
function dropDown($array,$multi,$size,$name,$result)
{
    /**
     *Format the select option
     */
    echo "<select name=\"$name";
    
    if ($multi == 1)
    {
        echo "[]\" size=\"$size\" multiple=\"multiple\">";
    }
    else
    {
        echo "\">\n";
    }
    
    if($multi == 0)
    {
        /**
        * Loop through non-multi array.
        * */
        foreach($array as $field => $value)
        {
            echo "<option value=\"$value\"";
            if($value == $result[$name]){echo " selected=\"selected\" ";}
            echo ">$field</option>\n";
        }    
    }
    else
    {
        /**
         * Loop through a multi-array
         * */
        
        ## Save the current value
        $value_count        = $result[$name];
        ## SOME SELECT ALLS = -1, SO NEED TO OFFSET THAT
        if ($value_count == -1){ $value_count = max($array);}
        
        foreach($array as $field => $value)
        {
            echo "<option value=\"$value\"";
            if($value == $value_count)
            {
                echo " selected=\"selected\" ";
                $value_count -= $value_count;
            }
            echo ">$field</option>\n";
        }
    }
    echo "</select>\n";
    
}

/**
 * USE THIS TO BUILD THE WEBPAGE
 * if_file = the iframe file to include
 * subheader is the title on the subsection
 * 
 * */
function build_page($main_view,$sub_menu,$subheader)
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
           
            if($userInfo != $result[$field])
            {
                $query = "UPDATE `$table` SET `$field` = $userInfo WHERE `$where_clause` = $where_reference";
                $sql = mysql_query($query) or die ("Bad Query:$query<br>".mysql_error());
                saveSQL($query,$table.'_update.sql',$remarks);
            }## CHANGE
        }##USERINFO > ""
    }##FOR EACH    
}
?>