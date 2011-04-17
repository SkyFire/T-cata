<?php
    
   
        echo '<div align="justify">You will need to
              enter a default starting value in the <strong>ENTRYID</strong>
              that will be used for future sequences.   Only basic information is needed
              at this point, after which you will be taken to the <strong>creature_template
              </strong> of your new creture id to fill in details<BR/>To keep from crashing,
              try to fill in minimum entry/name</div>';
   
    /**
     * CHEK TO SEE IF EITHER DEL_CREATURE/ADD_CREATURE IS SET
     * */
    if(isset($_POST['add_creature']) OR isset($_POST['del_creature']))
    {
        mysql_selectdb(SQL_WORLD_DATABASE);
        
        $entry = $_POST['entry'];
        
        if(isset($_POST['add_creature']))
        {
            if( ! isset($_POST['name']))
            {
                echo "Must Provide a NAME for creature!<p/>";
            }else{
                /**
                 *CHECK TO SEE IF THEY ARE ADDING 
                 **/
                $name = $_POST['name'];
                
                if($entry > 0 )
                {
                    $query = "INSERT INTO `creature_template` (`entry`,`name`) VALUES ($entry,'$name')";
                    mysql_query($query) or die("Unable to insert entry:$entry<br/>".mysql_error());
                    saveSQL($query,"creature_delete.sql");
                    
                    /* ADD TO CREATURE FILE */
                    $fh = fopen(CREATURE_FILE,"w");
                        fwrite($fh,$entry);
                    fclose($fh);
                    
                    header("location:creature_search.php?npc=$entry");
                    die();
                }
            }
            
        }else{
            /**
             * DEFAULTS TO DEL SINCE ONE OF THEM WAS SET
             * */
            if($entry > 0)
            {
                $query = "DELETE FROM `creature_template` WHERE `entry`=$entry";
                mysql_query($query) or die("Unable to delete entry:$entry<br/>".mysql_error());
                saveSQL($query,"creature_delete.sql");
                
                /* DELETE FROM QUESTS */
                $query = "DELETE FROM `creature_involvedrelation` WHERE `id`=$entry";
                mysql_query($query) or die("Unable to delete from involved relation entry:$entry<br/>".mysql_error());
                saveSQL($query,"creature_delete.sql");
                
                $query = "DELETE FROM `creature_questrelation` WHERE `id`=$entry";
                mysql_query($query) or die("Unable to delete from quest relation entry:$entry<br/>".mysql_error());
                saveSQL($query,"creature_delete.sql");
                
                echo "<p/><font color=#00ff00>CREATURE SUCCESSFULLY DELETED!</font><p/>";
            }
            
        }
     
    }
?>

<fieldset>
    <legend>Add New Creature</legend>
        <form method="post">
        <table>
            <tr>
                <td>entry<br><input type="text" name="entry" ></td>
                <td>name<br/><input  title="What is the name of your new creature?" style="width:200px;" type="text" name="name"></td>
            </tr><tr>
                <td colspan="2" align="right"><input class="inputbtn" type="submit" name="add_creature" value="Add"></td>
            </tr>
        </table>
        </form>
</fieldset>
<p/>
<fieldset>
    <legend>Delete Creature</legend>
        <center>
            <font color="#ff0000">
                <blink>
                    THIS IS NOT REVERSABLE - USE CAUTION
                </blink>
            </font>
            <br/><small>There is no validating - be sure you know what you are doing!!!</small>
            
        </center>
        
        <form method="post">
        <table>
            <tr>
                <td>entry<br/><input  title="ID of creature to delete?" type="text" name="entry"></td>
            </tr><tr>
                <td colspan="3" align="right"><input class="inputbtn" type="submit" name="del_creature" value="Delete"></td>
            </tr>
        </table>
        </form>
</fieldset>



