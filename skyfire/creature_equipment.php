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
    $sql = mysql_query("SELECT * FROM creature_equip_template WHERE entry=".$id) or die(mysql_error());
    $result = mysql_fetch_array($sql);
    
    //DUMMY STATUS MSG
    $status = "";
    
    
    if(isset($_POST['submit'])){

        
        $userData = $_POST;
        
        
         $id = $_REQUEST['npc'];
        
        //RELOAD DATA 
        mysql_selectdb(SQL_WORLD_DATABASE);
        $sql = mysql_query("SELECT * FROM creature_equip_template WHERE entry=$id") or die(mysql_error());
        $result = mysql_fetch_array($sql);
    
        parseData("if_creature_equipment.php",$userData,"creature_equip_template",$id,"entry");       
        
    
        $sql = mysql_query("SELECT * FROM creature_equip_template WHERE entry=".$id) or die(mysql_error());
        $result = mysql_fetch_array($sql);
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
                    <div class="CntHead"><div class="CntHeadTitle"><?php echo C_MNU_4;?></div></div>
                        <div class="CntFiller">
                            <div class="CntInfo">
                               
                            <?php
                                if(!$result['entry']){
                                    echo "No model information on CREATURE:$entry<br/>
                                    For more information, check creature_equip_template";
                                }else{
                                    include('if_creature_equipment.php');
                                }
                            ?>
                               
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