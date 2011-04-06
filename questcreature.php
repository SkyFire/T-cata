<?php
    //FIND THE CREATURE ITSELF USING THE ID
    $creatureID = $result['id'];
    $sql = "SELECT * FROM creature_template WHERE entry='$creatureID'";
    $sql = mysql_query($sql) or die("Bad NPC query: $sql<br/>".mysql_error());
    //LOAD THE RESULTS
    $npc = mysql_fetch_array($sql);
    
    //FIND THE CREATURE LOCATON
    $sql = "SELECT * FROM creature WHERE id='$creatureID'";
    $sql = mysql_query($sql) or die("Bad NPC query: $sql<br/>".mysql_error());
    //LOAD THE RESULTS
    $npcPos = mysql_fetch_array($sql);
    
    if(isset($_REQUEST['submit'])){
        die("submit");
    }
    if(isset($_REQUEST['update'])){
        die("update");
    }
    
?>
<center>
    <span style="background-color:#ffff00;"><font color="#ff0000">CURRENTLY UNDER CONSTRUCTION - NOT WORKING</font></span><P/>
    <form method="post">
    <table width="600">
        <tr>
            <td valign="middle"><a href="creature.php?npc="<?php echo $creatureID;?>">Edit</a>&nbsp;&nbsp;</td>
            <td>entry:<br/><input type="text" name="entry" value="<?php echo $creatureID;?>" size="10"></td>
            <td>Name:<br><input type="text" name="name" value="<?php echo $npc['name'];?>" size="30"></td>
            <td>npcflag<br><input type="text" name="npcflag" value="<?php echo $npcPos['npcflag'];?>" size="10"></td>
            <td>position_x<br><input type="text" name="position_x" value="<?php echo $npcPos['position_x'];?>" size="10"></td>
            <td>position_y<br><input type="text" name="position_y" value="<?php echo $npcPos['position_y'];?>" size="10"></td>
            <td>position_z<br><input type="text" name="position_z" value="<?php echo $npcPos['position_z'];?>" size="10"></td>
            <td>orientation<br><input type="text" name="orientation" value="<?php echo $npcPos['orientation'];?>" size="10"></td>
        </tr><tr>
            <td colspan="8 " align="right">
                &nbsp;<p/>
                <input type="submit" name="update" value="Update">
                <input type="submit" name="submit" value="Save">
            </td>
        </tr><tr>
        <td colspan="8">
            <hr>
                Make your changes, then select UPDATE to verify the results. If you are satisfied, click
                SAVE to commit your changes.
        </td>
        </tr>
    </table>
    </form>
</center>