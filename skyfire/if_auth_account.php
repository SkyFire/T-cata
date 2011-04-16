<?php
?>
<font color="#ff0000">
    When changine id/pw you MUST enter both fields! Just type the pw as
    normal, the system will hash it correctly
</font>
<br/>
<form method="post">
<fieldset>
    <legend>Account Information</legend>
        <table>
            <tr>
                <td>ID:<?php echo $result['id'];?></td>
                <td>username<br><input type="text" name="username" value="<?php echo $result['username'];?>"></td>
                <td>sha_pass_hash<br/><input type="text" name="sha_pass_hash" value="<?php echo $result['sha_pass_hash'];?>"></td>
                <td>sessionkey<br/><input type="text" name="sessionkey" value="<?php echo $result['sessionkey'];?>"></td>
                <td>v<br/><input type="text" name="v" value="<?php echo $result['v'];?>"></td>                
            </tr><tr>
                <td>s<br/><input type="text" name="s" value="<?php echo $result['s'];?>"></td>
                <td>email<br/><input type="text" name="email" value="<?php echo $result['email'];?>"></td>
                <td>joindate<br/><input type="text" name="joindate" value="<?php echo $result['joindate'];?>"></td>
                <td>last_ip<br/><input type="text" name="last_ip" value="<?php echo $result['last_ip'];?>"></td>
                <td>failed_logins<br/><input type="text" name="failed_logins" value="<?php echo $result['failed_logins'];?>"></td>                
            </tr><tr>
                <td>locked<br/><input type="text" name="locked" value="<?php echo $result['locked'];?>"></td>
                <td>last_login<br/><input type="text" name="last_login" value="<?php echo $result['last_login'];?>"></td>
                <td>online<br/><input type="text" name="online" value="<?php echo $result['online'];?>"></td>
                <td>expansion<br/><input type="text" name="expansion" value="<?php echo $result['expansion'];?>"></td>
                <td>mutetime<br/><input type="text" name="mutetime" value="<?php echo $result['mutetime'];?>"></td>                
            </tr><tr>
                <td>locale<br/><input type="text" name="locale" value="<?php echo $result['locale'];?>"></td>
                <td>recruiter<br/><input type="text" name="recruiter" value="<?php echo $result['recruiter'];?>"></td>            
                <td>gmlevel<br/><input type="text" name="gmlevel" value="<?php echo $access['gmlevel'];?>"></td>
                <td>RealmID<br/><input type="text" name="RealmID" value="<?php echo $access['RealmID'];?>"></td>
            </tr>
        </table>
</fieldset>
<p/>
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
<P><div align="right">
    
    <input type="submit" name="submit" value="Update" class="inputbtn">
        <input type="submit" name="delete" value="Delete" class="inputbtn">
</div>
</form>