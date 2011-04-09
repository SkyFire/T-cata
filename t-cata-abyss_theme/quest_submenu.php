<?php
?>
    <ul>
        <a target="_parent" href="quest_search.php">SEARCH</a></li>
        <?php if(isset($_REQUEST['quest'])){ ?>
            <li><a  href="quest_recieve.php?quest=<?php echo $_REQUEST['quest'];?>">QUEST RECIEVE</a></li>
            <li><a  href="quest_complete.php?quest=<?php echo $_REQUEST['quest'];?>">QUEST COMPLETE</a></li>
            <li><a  href="quest_giver.php?quest=<?php echo $_REQUEST['quest'];?>">QUEST GIVER</a></li>
            <li><a  href="quest_taker.php?quest=<?php echo $_REQUEST['quest'];?>">QUEST TAKER</a></li>
            <li>START SCRIPT</li>
            <li>COMPLETE SCRIPT</li>
            <li>LOCALES QUEST</li>
        <?php } ?>
    </ul>