<?php
    
    // LOAD A BASIC LANG SCRIPT
    include('lang/en.php');
    
    // LOAD SITE SCRIPTS
    include('include/config.php');
    
    if(isset($_REQUEST['npc'])){
        include('include/functions.php');
    }
    
    
    
    //DUMMY STATUS MSG
    $status = "";
    
    //PUMP IN THE DATA UPDATES :-)
    if(isset($_POST['submit'])){
        
        $result = creature($_REQUEST['npc']);
        //IF THEY CHANGE THE ENTRY, THEY ARE MAKING A NEW CREATURE SO WE'LL JUST DO IT ALL
        //RIGHT HERE
        if($_POST['entry'] != $result['entry']){
            $sql = "INSERT INTO `quest_template` (`entry`) VALUE ($Entry)";
            $sql = @mysql_query($sql) or die("Cannot Insert Entry Item<br/>See creature_template.PHP");
            
            //SAVE TO A TEXT FILE FOR DISPLAY CHANGES
            saveSQL($sql,"creature_template.sql");
        }
        
         updateRecords($_POST,$result,"creature_template","entry",$_REQUEST['npc']);
            
        
        //RELOAD THE TABLE
        $result = creature($_REQUEST['npc']);
        
        //UPDATE STATUS MSG
        $status = "<font color=#00ff00>Update Successful</font>&nbsp;&nbsp;-&nbsp;&nbsp;";
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
                    <div class="CntHead"><div class="CntHeadTitle">
                    
                    <?php
                        if(isset($_REQUEST['npc'])){
                            echo $status."Creature Information";
                        }else{
                            echo $status."Search For Quest";
                        }?>
                    </div></div>
                        <div class="CntFiller">
                            <div class="CntInfo">
                               
                              <?php
                                if(isset($_REQUEST['npc'])){
                                    include('if_creature_template.php');
                                }else{
                                    include('if_creature_search.php');
                                }?>
                               
                            </div>
                        </div>
                        <div class="CntFooter"></div>
                    </div></div>    
                           
                <!--### END OF CONTENT STUFF -->
                <!--### RIGHT COLUMN -->
                <div id="col-r">

                    <?php include('creature_submenu.php');?>
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