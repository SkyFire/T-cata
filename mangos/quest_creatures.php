<?php
    
    
    //FIND THE CREATURE ITSELF USING THE ID
    if(isset($_POST['update'])){
        
        //IF USER CLIK UPDATE USE THIER ID
        $creatureID = $_POST['id'];
    }else{
        
        //OTHERWISE USE THE RESULT FROM SENDING PAGE
        $creatureID = $result['id'];
    }
    
    $questID = $_REQUEST['quest'];
    $sql = "SELECT * FROM creature_template WHERE entry='$creatureID'";
    $sql = mysql_query($sql) or die("Bad NPC query: $sql</b><br/>".mysql_error());
    //LOAD THE RESULTS
    $npc = mysql_fetch_array($sql);
    
    //FIND THE CREATURE POS
    $sql = "SELECT * FROM creature WHERE id='$creatureID'";
    $sql = mysql_query($sql) or die("Bad NPC query: $sql</b><br/>".mysql_error());
    //LOAD THE RESULTS
    $npcPos = mysql_fetch_array($sql);
    
    
    if(isset($_POST['submit'])){
        $entryID = $_POST['id'];
        switch($giver){
            case 1://GIVER
                $sql = "UPDATE `creature_questrelation` SET `id`=$entryID WHERE `quest`=$questID";
                break;
            case -1://TAKER
                $sql = "UPDATE `creature_involvedrelation` SET `id`=$entryID WHERE `quest`=$questID";
                break;
        }
        //SAVE TO A TEXT FILE FOR DISPLAY CHANGES
		saveSQL($sql,"quest_creatures.sql");
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
                    <div class="CntHead"><div class="CntHeadTitle"><?php echo $who;?>&nbsp;
                    <font color=#ffff00><?php echo $quest['Title'];?></font></div></div>
                        <div class="CntFiller">
                            <div class="CntInfo">
                                <form method="post">
                                    <?php include('if_quest_creatures.php');?>
                                    <p/>
                                    
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