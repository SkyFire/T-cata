<?php

?>
<form method="post">
<fieldset>
    <legend>Security Levels</legend>
        <center>
            <table>
                <tr>
                    <td>gmlevel<br/><input type="text" name="gmlevel" value="<?php echo $access['gmlevel'];?>"></td>
                    <td>RealmID<br/><input type="text" name="RealmID" value="<?php echo $access['RealmID'];?>"></td>
                </tr>
            </table>
</fieldset>
<p/>
    <div align="right">    
        <input type="submit" name="submit" value="Update" class="inputbtn">
    </div>
</form>