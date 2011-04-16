<?php
    
    // LOAD A BASIC LANG SCRIPT
    include('lang/en.php');    
    include('include/config.php');   
   include('include/functions.php');
    
     $id = $_REQUEST['npc'];
     
    
    mysql_selectdb(SQL_WORLD_DATABASE);
    $sql = mysql_query("SELECT * FROM creature_onkill_reputation WHERE creature_id=".$id) or die(mysql_error());
    $result = mysql_fetch_array($sql);
    
    
    
    if(isset($_POST['submit'])){
        
        //SEE IF THEY ENTERED AN ID THAT DOES NOT EXIST
        if($_POST['creature_id'] != $result['creature_id']){
            
            //IF SO, ADD IT TO THE DB
            $creatureID = $_POST['creature_id'];
            $sql = "INSERT INTO creature_onkill_reputation (`entry_id`) VALUES ($creatureID)";
            $sql1 = mysql_query($sql1) or die ("bad query<br>$sql<br>".mysql_error());            
        }
        
        updateRecords($_POST,$result,"creature_onkill_reputation","creature_id",$_POST['creature_id']);
        
        
        //UPDATE TO SHOW CHANGES
         $sql = mysql_query("SELECT * FROM creature_onkill_reputation WHERE creature_id=".$id) or die(mysql_error());
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
                    <div class="CntHead"><div class="CntHeadTitle"><?php echo C_MNU_3;?></div></div>
                        <div class="CntFiller">
                            <div class="CntInfo">
                               
                            <?php include('if_creature_onkill_reputation.php');?>
                               
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