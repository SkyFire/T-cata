<?php
    
    function getCreatureLocation($npc)
    {
        mysql_selectdb(SQL_WORLD_DATABASE);
        $query = "SELECT * FROM `creature` WHERE `id` = ".$_REQUEST['npc'];
        $sql = mysql_query($query) or die($query."<br/>".mysql_error());
        $result = mysql_fetch_array($sql);
        return $result;
    }
    
    $result = getCreatureLocation($_REQUEST['npc']);
    
    if (isset($_POST['submit']))
    {
        updateRecords($_POST,$result,SQL_WORLD_DATABASE,"creature","id",$_REQUEST['npc'],"");
        $result = getCreatureLocation($_REQUEST['npc']);
    }
    
    
?>
<form method="post">
<fieldset>
    <legend>Creature Location Information</legend>
        <table>
            <tr>
                <td>guid<br><input type="text" name="guid" value="<?php echo $result['guid'];?>"></td>
                <td>id<br><input type="text" name="id" value="<?php echo $result['id'];?>"></td>
                <td>map<br><input type="text" name="map" value="<?php echo $result['map'];?>"></td>
                <td><!-- future additions--></td>
            </tr><tr>
                <td>position_x<br><input type="text" name="position_x" value="<?php echo $result['position_x'];?>"></td>
                <td>position_y<br><input type="text" name="position_y" value="<?php echo $result['position_y'];?>"></td>
                <td>position_z<br><input type="text" name="position_z" value="<?php echo $result['position_z'];?>"></td>
                <td>orientation<br><input type="text" name="orientation" value="<?php echo $result['orientation'];?>"></td>
            </tr><tr>
                <td>equipment_id<br><input type="text" name="equipment_id" value="<?php echo $result['equipment_id'];?>"></td>
                <td>spawntimesecs<br><input type="text" name="spawntimesecs" value="<?php echo $result['spawntimesecs'];?>"></td>
                <td>spawndist<br><input type="text" name="spawndist" value="<?php echo $result['spawndist'];?>"></td>
                <td>currentwaypoint<br><input type="text" name="currentwaypoint" value="<?php echo $result['currentwaypoint'];?>"></td>
            </tr><tr>
                <td>equipment_id<br><input type="text" name="equipment_id" value="<?php echo $result['equipment_id'];?>"></td>
                <td>spawntimesecs<br><input type="text" name="spawntimesecs" value="<?php echo $result['spawntimesecs'];?>"></td>
                <td>spawndist<br><input type="text" name="spawndist" value="<?php echo $result['spawndist'];?>"></td>
                <td>curhealth<br><input type="text" name="curhealth" value="<?php echo $result['curhealth'];?>"></td>
            </tr><tr>
                <td>DeathState<br><input type="text" name="DeathState" value="<?php echo $result['DeathState'];?>"></td>
                <td>spawnMask<br><input type="text" name="spawnMask" value="<?php echo $result['spawnMask'];?>"></td>
                <td>MovementType<br><input type="text" name="MovementType" value="<?php echo $result['MovementType'];?>"></td>
                <td>curmana<br><input type="text" name="curmana" value="<?php echo $result['curmana'];?>"></td>
            </tr><tr>
                <td>phaseMask<br><input type="text" name="phaseMask" value="<?php echo $result['phaseMask'];?>"></td>
                <td>modelid<br><input type="text" name="modelid" value="<?php echo $result['modelid'];?>"></td>
        </table>              
</fieldset>
<p/><div align="right"><input type="submit" name="submit" value="Update" class="inputbtn"></div>   
</form>
<fieldset>
    <legend>Other Locations by guid</legend>
        <table>
            <tr>
                <td>guid</td><td>map</td><td>posX</td><td>posY</td><td>posZ</td><td>Or</td>
                <td>Eq</td><td>SpSec</td><td>spwdst</td><td>Hlth</td><td>DS</td><td>MvTp</td>
                <td>mana</td><td>ph</td><td>mid</td>
            </tr>
            <?php
                $query = "SELECT * FROM `creature` WHERE `id` = ".$_REQUEST['npc'];
                $sql = mysql_query($query);
                while($result = mysql_fetch_array($sql))
                {
                    echo '<tr>
                              <td width="10">'.$result['guid'].'</td>
                              <td>'.$result['map'].'</td>
                              <td>'.$result['position_x'].'</td>
                              <td>'.$result['position_y'].'</td>
                              <td>'.$result['position_z'].'</td>
                              <td>'.$result['orientation'].'</td>
                              <td>'.$result['equipment_id'].'</td>
                              <td>'.$result['spawntimesecs'].'</td>
                              <td>'.$result['spawndist'].'</td>
                              <td>'.$result['curhealth'].'</td>
                              <td>'.$result['DeathState'].'</td>
                              <td>'.$result['MovementType'].'</td>
                              <td>'.$result['curmana'].'</td>
                              <td>'.$result['phaseMask'].'</td>
                              <td>'.$result['modelid'].'</td>
                         </tr>';
                }?>
        </table>
</fieldset>