<?php

?>
<div class="NavBox">
    <div class="NavHead"><div class="NavHeadTitle">Server Authorization Submenu</div></div>
        <div class="nav-menu">
            <ul>
                <li class="Level1"><a href="auth.php">New User Search</a></a></li>
                <?php if(isset($_REQUEST['user'])){?>
                    <li class="Level2"><a href="auth_account.php?user=<?php echo $_REQUEST['user'];?>">Account Information</a></li>
                    <li class="Level1"><a href="auth_access.php?user=<?php echo $_REQUEST['user'];?>"><?php echo NOT_DONE;?>Account Access</a></li>
                    <li class="Level2"><a href="auth_banned.php?user=<?php echo $_REQUEST['user'];?>"><?php echo NOT_DONE;?>Account Banned</a></li>
                    <li class="Level1"><a href="auth_ip_banned.php?user=<?php echo $_REQUEST['user'];?>"><?php echo NOT_DONE;?>IP Banned</a></li>
                    <li class="Level2"><a href="auth_logs.php?user=<?php echo $_REQUEST['user'];?>"><?php echo NOT_DONE;?>Logs</a></li>
                    <li class="Level1"><a href="auth_realmcharacters.php"><?php echo NOT_DONE;?>Realm Characters</a></li>
                    <li class="Level2"><a href="auth_realmlist.php"><?php echo NOT_DONE;?>Realm List</a></li>
                    <li class="Level1"><a href="auth_uptime.php"><?php echo NOT_DONE;?>Uptime</a></li>
                <?php }?>
            </ul>
        </div>
    <div class="NavFooter"></div>
</div>
