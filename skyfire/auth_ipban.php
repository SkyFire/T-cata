<?php
    include('include/config.php');
    include('lang/en.php');
    include('include/functions.php');
    
    $user_id = $_REQUEST['user'];
    $result = account($user_id);
    
    $query = "SELECT * FROM `ip_banned` WHERE `id` = $user_id";
    $sql = mysql_query($query);
    $banned = mysql_fetch_array($sql);
    
    if(isset($_POST['submit']))
    {
        updateRecords($_POST,$result,SQL_AUTH_DATABASE,"ip_banned","id",$account_id,""); 
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
						Account Information for <?php echo $result['username'];?></div></div>
                        <div class="CntFiller">
                            <div class="CntInfo">
								<?php include('if_auth_ipban.php');?>
                               
                            </div>
                        </div>
                        <div class="CntFooter"></div>
                    </div></div>    
                           
                <!--### END OF CONTENT STUFF -->
                <!--### RIGHT COLUMN -->
                <div id="col-r">

                    <?php include('auth_submenu.php');?>
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