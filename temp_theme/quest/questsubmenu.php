<?php
?>

        <a target="_parent" href="<?php echo SITE_ROOT;?>quest/">SEARCH</a>
        <?php if(isset($_REQUEST['quest'])){ ?>
            <br/><a  href="questrecieve.php?quest=<?php echo $_REQUEST['quest'];?>">QUEST RECIEVE</a>
            <br/><a  href="quest2x.php?quest=<?php echo $_REQUEST['quest'];?>">QUEST COMPLETE</a>
            <br/><a  href="quest3x.php?quest=<?php echo $_REQUEST['quest'];?>">QUEST GIVER</a>
            <br/><a  href="quest4x.php?quest=<?php echo $_REQUEST['quest'];?>">QUEST TAKER</a>
            <br/>START SCRIPT
            <br/>COMPLETE SCRIPT
            <br/>LOCALES QUEST
        <?php } ?>
    