<?php
    // LOAD A BASIC LANG SCRIPT
    include('lang/en.php');
    
    // LOAD SITE SCRIPTS
    include('include/config.php');
    include('include/functions.php');
    
    //CONNECT TO WORLD DB
    mysql_selectdb(SQL_WORLD_DATABASE);
    
    //MAKE SURE QUEST IS SET OR SEND THEM BACK TO SEARCH
    if(!isset($_REQUEST['quest'])){header('location:quest_search.php');}
    
    //LOAD QUEST INFO - LEFT NAME AS "RESULT" FOR LEGACY REASONS
    $questID = $_REQUEST['quest'];
    $result = quest($questID);
    
    
    
    if(isset($_REQUEST['submit'])){
        //CHECK EACH ENTRY FOR ANY CHANGES
        //IF ENTRY HAS BEEN CHANGED, I TREAT IT AS A NEW QUEST LINE
        //THEN EACH SUBSEQUENT CHECK WILL BE APPLIED TO THE NEW ENTRY ID
        if($_REQUEST['entry'] != $result['entry']){
            $sql = "INSERT INTO quest_template (entry) VALUE ($Entry)";
            $sql = @mysql_query($sql) or die("Cannot Insert Entry Item<br/>See QUEST1.PHP");    
        }
        
        updateRecords($_REQUEST,$result,"quest_template","entry",$_REQUEST['quest']);
       
        //LOAD THE NEW RECORDS TO DISPLAY
        $questID = $_REQUEST['quest'];
        $result = quest($questID);
    }
    
?>
<html>
    <head>
	<title><?php echo SITE_TITLE;?></title>
	<link href="vision.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="t-cata.js"></script>
	</head>

    <body>
    <div id="wrapper">
        <div id="header">

        </div>
        
        <!--### TOP MENU -->
        <div id="menu">
            <?php include('topmenu.php');?><div class="clearL"></div>
        </div>
        <!--### END TOP MENU -->


        <div id="container">
            
            <!--### LEFT COLUMN ###-->
            <div id="col-l">


                 <!--### SOME CONTENT CRAP
                                ADD THESE "CNTBOX" FOR ADDING SECTIONS -->
                <div class="CntBox">
                    <div class="CntHead"><div class="CntHeadTitle"><?php echo Q_ACCEPT;?>&nbsp;
                    <font color=#ffff00><?php echo $result['Title'];?></font></div></div>
                        <div class="CntFiller">
                            <div class="CntInfo">
                                <form method="post">
                                    <?php include('if_quest_recieve.php');?>
                                    <p/>
                                    <div align="right"><input type="submit" value="Update" name="submit"></div>
                                </form>                              
                             </div>
                        </div>
                        <div class="CntFooter"></div>
                    </div></div>    
                           
                <!--### END OF CONTENT STUFF -->
                <!--### RIGHT COLUMN -->
                <div id="col-r">

                    <?php include('quest_submenu.php');?>


                   <?php include('calc_mnu.php');?>

                </div>  
                
            <div class="clearB"></div>

            <div id="footer">
                <div id="ft-Info">
                    <?php include('footer.php');?>
                </div>
            </div>
        
    
        </div>
        <!--### END OF CONTAINER ###-->
    </body>
</html>