<?php

    mysql_selectdb(SQL_WORLD_DATABASE);
    
    //FIND THE CREATURE ITSELF USING THE ID
    if(isset($_POST['submit']))
    {
        //IF USER CLIK UPDATE USE THIER ID
        $creatureID = $_POST['id'];
    }
    else
    {
        //OTHERWISE USE THE RESULT FROM SENDING PAGE
        $creatureID = $_REQUEST['npc'];
    }
    
    $questID = $_REQUEST['quest'];
    $sql = "SELECT * FROM creature_template WHERE entry='$creatureID'";
    $sql = mysql_query($sql) or die("Bad NPC query: $sql</b><br/>".mysql_error());
    //LOAD THE RESULTS
    $npc = mysql_fetch_array($sql);
    
    //FIND THE CREATURE POS
    $sql = "SELECT * FROM creature WHERE id='$creatureID'";
    $sql = mysql_query($sql) or die("Bad NPC query: $sql</b><br/>".mysql_error());
    //LOAD THE RESULTS
    $npcPos = mysql_fetch_array($sql);
    
    
    if(isset($_POST['submit'])){
        $entryID = $_POST['id'];
        switch($giver){
            case 1://GIVER
                $sql = "UPDATE `creature_questrelation` SET `id`=$entryID WHERE `quest`=$questID";
                break;
            case -1://TAKER
                $sql = "UPDATE `creature_involvedrelation` SET `id`=$entryID WHERE `quest`=$questID";
                break;
        }
        //SAVE TO A TEXT FILE FOR DISPLAY CHANGES
		saveSQL($sql,"quest_creatures.sql");
    }    
?>
<form method="post">
<fieldset>
    <legend>Quest Creature Information</legend>
        <table>
        <tr>
            <td class="tablefont" >entry:</b><br/><input type="text" name="id" value="<?php echo $creatureID;?>" size="10"></td>
            <td class="tablefont" width="200" ><b>Name:</b><br><a href="creature_template.php?npc=<?php echo $creatureID;?>"><?php echo $npc['name'];?></a></td>
            <td class="tablefont" width="100" ><b>npcflag</b><br><font color="#D56C01"><?php echo $npc['npcflag'];?></font></td></tr><tr>
            <td class="tablefont" width="100" ><b>position_x</b><br><font color="#D56C01"><?php echo $npcPos['position_x'];?></font></td>
            <td class="tablefont" width="100" ><b>position_y</b><br><font color="#D56C01"><?php echo $npcPos['position_y'];?></font></td>
            <td class="tablefont" width="100" ><b>position_z</b><br><font color="#D56C01"><?php echo $npcPos['position_z'];?></font></td>
            <td class="tablefont" width="100" ><b>orientation</b><br><font color="#D56C01"><?php echo $npcPos['orientation'];?></font></td>
        </tr><tr>
            <td colspan="8 " align="right">
                &nbsp;<p/>
                <input type="submit" name="update" value="Update">
                <input type="submit" name="submit" value="Save">
            </td>
        </tr><tr>
        <td colspan="8">
            <hr>
                <span class="tablefont"><?php echo Q_INSTR_1."<br/>".Q_INSTR_2;?> </span>
        </td>
        </tr>
    </table>
</fieldset>
<p/><div align="right"><input type="submit" name="submit" value="Update" class="inputbtn"></div>
</form>