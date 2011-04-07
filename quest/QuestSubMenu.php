<?php
    session_start();
?>

<html>
    <head>
        <link rel="stylesheet" href="../scripts/tcata.css" type="text/css">
    </head>
    <body>
        <a target="_parent" href="<?php echo SITE_ROOT;?>quest/">SEARCH</a>
        <?php if(isset($_REQUEST['quest'])){ ?>
            <br/><a target="main" href="quest1x.php?quest=<?php echo $_SESSION['quest'];?>">QUEST RECIEVE</a>
            <br/><a target="main" href="quest2x.php?quest=<?php echo $_SESSION['quest'];?>">QUEST COMPLETE</a>
            <br/><a target="main" href="quest3x.php?quest=<?php echo $_SESSION['quest'];?>">QUEST GIVER</a>
            <br/><a target="main" href="quest4x.php?quest=<?php echo $_SESSION['quest'];?>">QUEST TAKER</a>
            <br/>START SCRIPT
            <br/>COMPLETE SCRIPT
            <br/>LOCALES QUEST
        <?php } ?>
    </body>
</html>



           