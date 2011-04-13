<?php
    
    // LOAD A BASIC LANG SCRIPT
    include('lang/en.php');
    
    // LOAD SITE SCRIPTS
    include('include/config.php');
    
    if(isset($_REQUEST['npc'])){
        include('include/functions.php');
    }
    
     $id = $_REQUEST['npc'];
     
    // GET MODEL ID FROM CREATURE TABLE
    //THERE SEEMS TO BE A FEW PLACES FOR THIS, BUT CREATURE IS THE ONLY ONE WITH 1
    //VARIABLE, ALL OTHERS HAVE A MODELIDx
    mysql_selectdb(SQL_WORLD_DATABASE);
    $sql = mysql_query("SELECT * FROM creature WHERE id=".$id) or die(mysql_error());
    $result = mysql_fetch_array($sql) or die("bad fetch:$result<br/>".mysql_error());
    
    $modelid = $result['modelid'];
    
    //OPEN UP CREATURE_MODEL_INFO TABLE WITH $MODELID VAR
    $sql = mysql_query("SELECT * FROM creature_model_info WHERE modelid=".$modelid) or die(mysql_error());
    $result = mysql_fetch_array($sql);
    
    
    
    
    //DUMMY STATUS MSG
    $status = "";
    
    
    if(isset($_POST['submit'])){

        
        $userData = $_POST;
        
        
         $id = $_REQUEST['npc'];
        
        //RELOAD DATA 
        mysql_selectdb(SQL_WORLD_DATABASE);
        $sql = mysql_query("SELECT * FROM creature WHERE id=$id") or die(mysql_error());
        $result = mysql_fetch_array($sql);
    
        $modelid = $result['modelid'];
        
        parseData("if_creature_model.php",$userData,"creature_model_info",$modelid,"modelid");
        
        
    
        //OPEN UP CREATURE_MODEL_INFO TABLE WITH $MODELID VAR
        $sql = mysql_query("SELECT * FROM creature_model_info WHERE modelid=".$modelid) or die(mysql_error());
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
                                if(!$result['modelid']){
                                    echo "No model information on CREATURE:$id<br/>
                                    For more information, check creature_modelid_info table";
                                }else{
                                    include('if_creature_model.php');
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