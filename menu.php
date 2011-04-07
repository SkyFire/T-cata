<?php
    include('includes/config.php');
    include('language/en.php');
?>
<html>
    <head>
        <link rel="stylesheet" href="scripts/tcata.css" type="text/css">        
    </head>
    <body>
        <center>
            <span class="title">
            <?php echo PROGRAM_TITLE;?><br/>
            </span>
            <?php echo PROGRAM_VERSION;?>
            <P/>
            <span class="menu">
            &nbsp;&nbsp;
                <a href="<?php echo SITE_ROOT;?>quest/">QUEST</a>
                &nbsp;|&nbsp;
                <a href="<?php echo SITE_ROOT;?>creature/">CREATURE</a>
                &nbsp;|&nbsp;
                GAME OBJECT
                &nbsp;|&nbsp;
                ITEM
                &nbsp;&nbsp;
            </span>
        </center>
    </body>
</html>