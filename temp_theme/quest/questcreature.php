<?php
    //FIND THE CREATURE ITSELF USING THE ID
    if(isset($_REQUEST['update'])){
        
        //IF USER CLIK UPDATE USE THIER ID
        $creatureID = $_REQUEST['id'];
    }else{
        
        //OTHERWISE USE THE RESULT FROM SENDING PAGE
        $creatureID = $result['id'];
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
    
    
    if(isset($_REQUEST['submit'])){
        $entryID = $_REQUEST['id'];
        switch($giver){
            case 1://GIVER
                $sql = "UPDATE creature_questrelation SET id=$entryID WHERE quest=$questID";
                break;
            case -1://TAKER
                $sql = "UPDATE creature_involvedrelation SET id=$entryID WHERE quest=$questID";
                break;
        }
        //SAVE TO A TEXT FILE FOR DISPLAY CHANGES
        $fh=fopen("quest_template.txt","a+");
        fwrite($fh,date("l dS of F Y h:i:s A").$sql."\n");
        fclose($fh);
    }
    
?>
<center>
    
    <form method="post">
    <table width="800" ><b>
        <tr>
            <td class="tablefont" >entry:</b><br/><input type="text" name="id" value="<?php echo $creatureID;?>" size="10"></td>
            <td class="tablefont" width="200" ><b>Name:</b><br><a href="../creature/index.php?npc=<?php echo $creatureID;?>"><?php echo $npc['name'];?></a></td>
            <td class="tablefont" width="100" ><b>npcflag</b><br><?php echo $npc['npcflag'];?></td>
            <td class="tablefont" width="100" ><b>position_x</b><br><?php echo $npcPos['position_x'];?></td>
            <td class="tablefont" width="100" ><b>position_y</b><br><?php echo $npcPos['position_y'];?></td>
            <td class="tablefont" width="100" ><b>position_z</b><br><?php echo $npcPos['position_z'];?></td>
            <td class="tablefont" width="100" ><b>orientation</b><br><?php echo $npcPos['orientation'];?></td>
        </tr><tr>
            <td colspan="8 " align="right">
                &nbsp;<p/>
                <input type="submit" name="update" value="Update">
                <input type="submit" name="submit" value="Save">
            </td>
        </tr><tr>
        <td colspan="8">
            <hr>
                <span class="tablefont"><?php echo UPDATE_GOSSIP."<br/>".CREATURESEL_GOSSIP;?> </span>
        </td>
        </tr>
    </table>
    </form>
</center>