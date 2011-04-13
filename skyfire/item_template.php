<?php
    
    // LOAD A BASIC LANG SCRIPT
    include('lang/en.php');
    
    // LOAD SITE SCRIPTS
    include('include/config.php');
    
    include('include/functions.php');
    
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


                 <!-- SHOW SEARCH CRITERIA -->
                <div class="CntBox">
                    <div class="CntHead">
						<div class="CntHeadTitle">
							Information about item the:
                            <?php echo itemName($_REQUEST['item']);?>
						</div>
					</div>
					<div class="CntFiller">
                        <div class="CntInfo">
                               <font color=#ff0000>Multi-Select on certain stats (classes, races e.g.) do not work.
                               temporarily I included a textbox to make your changes. Changes are done one at a time.
                               You cannot make multiple changes. I will have the multi-select working soon</font>
                            <?php
                                mysql_selectdb(SQL_WORLD_DATABASE);
                                $query = "SELECT * FROM `item_template` WHERE `entry` =".$_REQUEST['item'];
                                $sql = mysql_query($query);
                                $result = mysql_fetch_array($sql);
                                
                                $itemid = $_REQUEST['item'];
                                
                                if(isset($_POST['submit'])){
                                    
                                    
                                    //UPDATE THE RECORDS
                                    updateRecords($_POST,$result,"item_template","entry",$itemid);
                                    $query = "SELECT * FROM `item_template` WHERE `entry` =".$_REQUEST['item'];
                                    $sql = mysql_query($query);
                                    $result = mysql_fetch_array($sql);
                                }
                                include('if_item_template.php');
                            ?>
                               
                        </div>
                    </div>
                    <div class="CntFooter"></div>
                </div>
                
                
                
			</div><!-- END COL 1 -->
			
            <div id="col-r">

                    <?php include('item_submenu.php');?>
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