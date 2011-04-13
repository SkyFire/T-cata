<?php
    
    // LOAD A BASIC LANG SCRIPT
    include('lang/en.php');
    
    // LOAD SITE SCRIPTS
    include('include/config.php');
    
    if(isset($_REQUEST['npc'])){
        include('include/functions.php');
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


                 <!-- SHOW SEARCH CRITERIA -->
                <div class="CntBox">
                    <div class="CntHead">
						<div class="CntHeadTitle">
							Search for Items
						</div>
					</div>
					<div class="CntFiller">
                        <div class="CntInfo">
							<font color="#ff0000">
								Name and entry search work fine, all others are buggy.
								will fix later.</font><br/>
                               
                             <?php include('if_item_search.php');?>
                               
                        </div>
                    </div>
                    <div class="CntFooter"></div>
                </div>
				
				
				
				<?php //--SHOW RESULTS
					if(isset($_POST['submit'])){ ?>
				<div class="CntBox">
                    <div class="CntHead">
						<div class="CntHeadTitle">
							Search for Items
						</div>
					</div>
					<div class="CntFiller">
                        <div class="CntInfo">
                
							<?php include('if_item_srcresults.php');?>
						</div>
					</div>
                    <div class="CntFooter"></div>
                </div>
				<?php } ?>
				
				
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