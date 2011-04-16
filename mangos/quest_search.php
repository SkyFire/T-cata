<?php
    
    // LOAD A BASIC LANG SCRIPT
    include('lang/en.php');
    
    // LOAD SITE SCRIPTS
    include('include/config.php');
       
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


               <div class="CntBox">
                    <div class="CntHead">
						<div class="CntHeadTitle">Quest Search</div>
					</div>
                        <div class="CntFiller">
                            <div class="CntInfo">
                                <form method="post">
                                    <?php include('if_quest_search.php');?>
                                    <p/>                                    
                                </form>                              
                             </div>
                        </div>
                        <div class="CntFooter"></div>
                </div>
					<?php if( ! isset($_POST['submit']))
					{
						/* REQUIRED FOR COSMETIC PURPOSES */
						echo '</div>';
					}?>    
                                
                           
                 <?php if(isset($_POST['submit'])){?>
                        
                    
                 <div class="CntBox">
                    <div class="CntHead"><div class="CntHeadTitle">Search Results</div></div>
                        <div class="CntFiller">
                            <div class="CntInfo">
                                    <?php include('if_quest_results.php');?>
                             </div>
                        </div>
                        <div class="CntFooter"></div>
                    </div></div>    
                    <?php } ?>
	
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