<?php
function getCreatureEquipment($npc)
    {
        mysql_selectdb(SQL_WORLD_DATABASE);
        $query = "SELECT * FROM `creature_equip_template` WHERE `entry` = ".$_REQUEST['npc'];
        $sql = mysql_query($query) or die($query."<br/>".mysql_error());
        $result = mysql_fetch_array($sql);
        return $result;
    }
    
    $result = getCreatureEquipment($_REQUEST['npc']);
    
    if (isset($_POST['submit']))
    {
        updateRecords($_POST,$result,SQL_WORLD_DATABASE,"creature_equip_template","entry",$_REQUEST['npc'],"");
        $result = getCreatureEquipment($_REQUEST['npc']);
    }
?>
<form method="post">
<fieldset>
    <legend>Equipment Template</legend>
        <table>
            <tr>
                <td>entry<br/><input type="text" name="entry" value="<?php echo $result['entry'];?>"></td>
                <td>equipentry1<br/><input type="text" name="equipentry1" value="<?php echo $result['equipentry1'];?>"></td>
                <td>equipentry2<br/><input type="text" name="equipentry2" value="<?php echo $result['equipentry2'];?>"></td>
                <td>equipentry3<br/><input type="text" name="equipentry3" value="<?php echo $result['equipentry3'];?>"></td>
            </tr>
        </table>               
</fieldset>
<p/><div align="right"><input type="submit" name="submit" value="Update" class="inputbtn"></div>