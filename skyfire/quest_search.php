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


                 <!--### SOME CONTENT CRAP
                                ADD THESE "CNTBOX" FOR ADDING SECTIONS -->
                <div class="CntBox">
                    <div class="CntHead"><div class="CntHeadTitle">Search For Quest</div></div>
                        <div class="CntFiller">
                            <div class="CntInfo">
                                
                              <?php include('if_quest_search.php');?>
                                
                           
                <!--### END OF CONTENT STUFF -->
                <!--### RIGHT COLUMN -->
                <div id="col-r">

                    <?php include('quest_submenu.php');?>


                   <?php include('calc_mnu.php');?>


<!-- dont need this one atm but saving as a template
                    <div class="NavBox">
                        <div class="NavHead"><div class="NavHeadTitle">Block Title</div></div>
                            <div class="NavFiller">
                                <div class="NavInfo">
                        
                                &nbsp;You can use this area for server information, news ticker, vent or team 
                                speak viewers, stats, or anything else you can think of. Use as 
                                many of these blocks as you please.<br />
                        
                                </div>
                            </div>
                        <div class="NavFooter"></div>
                    </div>

                </div>
                <!--### END OF RIGHT COLUMN -->
                
                
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