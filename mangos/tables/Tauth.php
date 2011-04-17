<?php

?>
<form method="post">
<center>
    <fieldset>
        <legend>User Search</legend>
            
            <table>
                <tr>
                    <td>id<br/><input type="text" name="id">        </td>
                    <td>username<br/><input type="text" name="username">         </td>
                </tr>
            </table>
           
    </fieldset>
     </center>
<p><div align="right"><input type="submit" name="search" value="Search" class="inputbtn"></div>     
</form>

<?php
    if(isset($_POST['search']))
    {
        mysql_selectdb(SQL_AUTH_DATABASE);
        
        $query = "SELECT * FROM `account` WHERE ";
        
        if(isset($_POST['id']) && $_POST['id'] > "")
        {
            $query .= "`id` = ".$_POST['id'];
        }
        
        if(isset($_POST['username']) && $_POST['username'] > "")
        {
            $query .= "`username` = '".$_POST['username']."'";
        }
        
        $sql = mysql_query($query) or die("Bad search query<br/>$query<br/>".mysql_error());
        ?>
        <fieldset>
            <legend>Search Results</legend>
                <table>
                    <tr>
                        <td>ID</td><td>USERNAME</td>
                    </tr>
                        <?php
                        while($result = mysql_fetch_array($sql))
                        {
                            echo '<tr>
                                    <td><a href="auth_account.php?user='.$result['id'].'">'.$result['id'].'</a></td>
                                    <td><a href="auth_account.php?user='.$result['id'].'">'.$result['username'].'</a></td>
                                </tr>';
                        }
                        ?>
                </table>
        </fieldset><?php
    }
?>
    