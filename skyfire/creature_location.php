<?php
    
    // LOAD A BASIC LANG SCRIPT
    include('lang/en.php');
    
    // LOAD SITE SCRIPTS
    include('include/config.php');
    
    if(isset($_REQUEST['npc'])){
        include('include/functions.php');
    }
    
     $id = $_REQUEST['npc'];
     
    mysql_selectdb(SQL_WORLD_DATABASE);
    $sql = mysql_query("SELECT * FROM creature WHERE id=".$id) or die(mysql_error());
    $result = mysql_fetch_array($sql) or die("bad fetch:$result<br/>".mysql_error());
    
    
    
    //DUMMY STATUS MSG
    $status = "";
    
    
    if(isset($_POST['submit'])){

        $creatureID = $_REQUEST['npc'];
        $userData = $_POST;
        
        parseData("if_creature_loc.php",$userData,"creature",$creatureID,"id");
        
        //RELOAD DATA
         $id = $_REQUEST['npc'];
        mysql_selectdb(SQL_WORLD_DATABASE);
        $sql = mysql_query("SELECT * FROM creature WHERE id=".$id) or die(mysql_error());
        $result = mysql_fetch_array($sql) or die("bad fetch:$result<br/>".mysql_error()); 
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
                    <div class="CntHead"><div class="CntHeadTitle"><?php echo C_MNU_2;?></div></div>
                        <div class="CntFiller">
                            <div class="CntInfo">
                               
                              <?php include('if_creature_loc.php');?>
                               
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