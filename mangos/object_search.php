<?php
    include('include/config.php');
    include('include/functions.php');
    include('include/arrays.php');
    include('lang/en.php');
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
                    <div class="CntHead"><div class="CntHeadTitle"><?php echo O_TITLE;?></div></div>
                        <div class="CntFiller">
                            <div class="CntInfo">
                                <form method="post">
                                    <?php include('if_object_search.php');?>
                                    <p/>                                    
                                </form>                              
                             </div>
                        </div>
                        <div class="CntFooter"></div>
                    </div></div>    
                
                
                 <?php if(isset($_POST['submit'])){?>
                        
                    
                 <div class="CntBox">
                    <div class="CntHead"><div class="CntHeadTitle"><?php echo O_RESULTS;?></div></div>
                        <div class="CntFiller">
                            <div class="CntInfo">
                                <form method="post">
                                    <?php include('if_object_results.php');?>
                                    <p/>                                    
                                </form>                              
                             </div>
                        </div>
                        <div class="CntFooter"></div>
                    </div></div>    
                    <?php } ?>
                
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