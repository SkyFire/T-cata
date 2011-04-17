<?php
    $user_id = $_REQUEST['user'];
    $result = account($user_id);
    
    if(isset($_POST['delete']) OR
       isset($_POST['submit']) )
    {
        if(isset($_POST['delete']))
        {
            $account_id = $_REQUEST['user'];
            $query = "DELETE FROM `account` WHERE `id` = $account_id";
            $sql = mysql_query($query) or die("Unable to delete account<br/
                                              $query<p/>".mysql_error());
            /**
             *TAKE THEM TO AUTH.PHP TO START OVER AFTER DELETE
             **/
            header("location:auth.php");
            die();
        }
        
        if(isset($_POST['submit']))
        {
            $account_id = $_REQUEST['user'];
            $result = account($account_id);
            
            /**
             *CHECK TO SEE IF THEY CHANGED THE PW
             **/
            if( $_POST['username'] != $result['username'] OR $_POST['sha_pass_hash'] != $result['sha_pass_hash'])
            {                
                $user_name = strtoupper($_POST['username']);
                $user_password = strtoupper($_POST['sha_pass_hash']);
                
                
                /** CREATE THE PW **/
                $code = sha1($user_name.":".$user_password);
                $code = strtoupper($code);
                $query = "UPDATE `account` SET
                    `username`      = '$user_name',
                    `sha_pass_hash` = '$code',
                    `sessionkey`    = '',
                    `v`             = '',
                    `s`             = ''
                    WHERE `id` = $account_id";
                mysql_query($query) or die("Cannot update ID/PW<br/>Query: $query<br/>".mysql_error());
            }
            else
            {
                updateRecords($_POST,$result,SQL_AUTH_DATABASE,"account","id",$account_id,"");    
            }         
        }//SUBMIT
        
        /** RELOAD NEW DATA **/        
        $result = account($_REQUEST['user']);
    }//SUBMIT OR DELETE
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
                <td>expansion<br/><input type="text" name="expansion" value="<?php echo $result['expansion'];?>"></td>
                <td>mutetime<br/><input type="text" name="mutetime" value="<?php echo $result['mutetime'];?>"></td>                
            </tr><tr>
                <td>active_realm_id<br/><input type="text" name="active_realm_id" value="<?php echo $result['active_realm_id'];?>"></td>
                <td>gmlevel<br/><input type="text" name="gmlevel" value="<?php echo $result['gmlevel'];?>"></td>
                <td>locale<br/><input type="text" name="locale" value="<?php echo $result['locale'];?>"></td>
                <td>expansion<br/><input type="text" name="expansion" value="<?php echo $result['expansion'];?>"></td>            
            </tr>
        </table>
</fieldset>
<p/>
<P><div align="right">
    
    <input type="submit" name="submit" value="Update" class="inputbtn">
        <input type="submit" name="delete" value="Delete" class="inputbtn">
</div>
<p>

</form>