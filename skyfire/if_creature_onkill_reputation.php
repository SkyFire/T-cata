<?php

?>
<form method="post">
    <fieldset>
        <legend>Rep For Killing Creature</legend>
            <table>
                <tr>
                    <td>creature_id<br><input type="text" name="creature_id" value="<?php echo $result['creature_id'];?>"></td>
                    <td>RewOnKillRepFaction1<br><input type="text" name="RewOnKillRepFaction1" value="<?php echo $result['RewOnKillRepFaction1'];?>"></td>
                    <td>RewOnKillRepFaction2<br><input type="text" name="RewOnKillRepFaction2" value="<?php echo $result['RewOnKillRepFaction2'];?>"></td>
                    <td>MaxStanding1<br><input type="text" name="MaxStanding1" value="<?php echo $result['MaxStanding1'];?>"></td>
                    <td>IsTeamAward1<br><input type="text" name="IsTeamAward1" value="<?php echo $result['IsTeamAward1'];?>"></td>
                </tr><tr>
                    <td>RewOnKillRepValue1<br><input type="text" name="RewOnKillRepValue1" value="<?php echo $result['RewOnKillRepValue1'];?>"></td>
                    <td>MaxStanding2<br><input type="text" name="MaxStanding2" value="<?php echo $result['MaxStanding2'];?>"></td>
                    <td>RewOnKillRepValue2<br><input type="text" name="RewOnKillRepValue2" value="<?php echo $result['RewOnKillRepValue2'];?>"></td>
                    <td>TeamDependent<br><input type="text" name="TeamDependent" value="<?php echo $result['TeamDependent'];?>"></td>
                </tr>
            </table>
    </fieldset>
    <p>
        <div align="right"><input type="submit" name="submit" value="Update" class="inputbtn"></div>
        <br>
            Altered <strong>creature_id</strong> is treated as a NEW entry. USE CAUTION!<P/>
</form>