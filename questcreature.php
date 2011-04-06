<?php
    //FIND THE CREATURE ITSELF USING THE ID
    $creatureID = $result['id'];
    $sql = "SELECT * FROM creature_template WHERE entry='$creatureID'";
    $sql = mysql_query($sql) or die("Bad NPC query: $sql</b><br/>".mysql_error());
    //LOAD THE RESULTS
    $npc = mysql_fetch_array($sql);
    
    //FIND THE CREATURE FLAG
    $sql = "SELECT * FROM creature_template WHERE entry='$creatureID'";
    $sql = mysql_query($sql) or die("Bad NPC query: $sql</b><br/>".mysql_error());
    //LOAD THE RESULTS
    $npcflag = mysql_fetch_array($sql);
    
    //FIND THE CREATURE POS
    $sql = "SELECT * FROM creature WHERE id='$creatureID'";
    $sql = mysql_query($sql) or die("Bad NPC query: $sql</b><br/>".mysql_error());
    //LOAD THE RESULTS
    $npcPos = mysql_fetch_array($sql);
    
    
    if(isset($_REQUEST['submit'])){
        switch($giver){
            case 1://GIVER
                break;
            case -1://TAKER
                break;
        }
    }
    
?>
<center>
    <span style="background-color:#ffff00;"><font color="#ff0000">CURRENTLY UNDER CONSTRUCTION - NOT WORKING</font></span><P/>
    <form method="post">
    <table width="800" ><b>
        <tr>
            <td class="tablefont" >entry:</b><br/><input type="text" name="entry" value="<?php echo $creatureID;?>" size="10"></td>
            <td class="tablefont" width="200" ><b>Name:</b><br><a href="creature.php?npc=<?php echo $creatureID;?>"><?php echo $npcflag['name'];?></a></td>
            <td class="tablefont" width="100" ><b>npcflag</b><br><?php echo $npcflag['npcflag'];?></td>
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
                <span class="tablefont">Make your changes, then select UPDATE to verify the results. If you are satisfied, click
                SAVE to commit your changes.</span>
        </td>
        </tr>
    </table>
    </form>
</center>