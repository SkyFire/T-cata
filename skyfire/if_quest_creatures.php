<?php
    
?>
<fieldset>
    <legend>Quest Creature Information</legend>
        <table>
        <tr>
            <td class="tablefont" >entry:</b><br/><input type="text" name="id" value="<?php echo $creatureID;?>" size="10"></td>
            <td class="tablefont" width="200" ><b>Name:</b><br><a href="creature_search.php?npc=<?php echo $creatureID;?>"><?php echo $npc['name'];?></a></td>
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