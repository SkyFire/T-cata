<?php

?>
<form method="post">
<fieldset>
    <legend>Banned Information</legend>
        <table>
            <tr>
                <td>bandate<br><input type="text" name="bandate" value="<?php echo $banned['bandate'];?>"></td>
                <td>unbandate<br/><input type="text" name="unbandate" value="<?php echo $banned['unbandate'];?>"></td>
                <td>bannedby<br/><input type="text" name="bannedby" value="<?php echo $banned['bannedby'];?>"></td>
                <td>banreason<br/><input type="text" name="banreason" value="<?php echo $banned['banreason'];?>"></td>
                <td>active<br/><input type="text" name="active" value="<?php echo $banned['active'];?>"></td>
            </tr>
        </table>
</fieldset>
<P/>
    <div align="right">    
        <input type="submit" name="submit" value="Ban" class="inputbtn">
    </div>
</form>
    