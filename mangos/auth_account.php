<?php
    include('include/config.php');
    include('lang/en.php');
    include('include/functions.php');
    
    $user_id = $_REQUEST['user'];
    $result = account($user_id);
    
    if(isset($_POST['delete']) OR
       isset($_POST['submit']) )
    {
        if(isset($_POST['delete']))
        {
            $account_id = $_REQUEST['user'];
            $query = "DELETE FROM `account` WHERE `id` = $account_id";
            $sql = mysql_query($query) or die("Unable to delete account<br/
                                              $query<p/>".mysql_error());
            /**
             *TAKE THEM TO AUTH.PHP TO START OVER AFTER DELETE
             **/
            header("location:auth.php");
            die();
        }
        
        if(isset($_POST['submit']))
        {
            $account_id = $_REQUEST['user'];
            $result = account($account_id);
            
            /**
             *CHECK TO SEE IF THEY CHANGED THE PW
             **/
            if( $_POST['username'] != $result['username'] OR $_POST['sha_pass_hash'] != $result['sha_pass_hash'])
            {                
                $user_name = strtoupper($_POST['username']);
                $user_password = strtoupper($_POST['sha_pass_hash']);
                
                
                /** CREATE THE PW **/
                $code = sha1($user_name.":".$user_password);
                $code = strtoupper($code);
                $query = "UPDATE `account` SET
                    `username`      = '$user_name',
                    `sha_pass_hash` = '$code',
                    `sessionkey`    = '',
                    `v`             = '',
                    `s`             = ''
                    WHERE `id` = $account_id";
                mysql_query($query) or die("Cannot update ID/PW<br/>Query: $query<br/>".mysql_error());
            }
            else
            {
                updateRecords($_POST,$result,SQL_AUTH_DATABASE,"account","id",$account_id,"");    
            }         
        }//SUBMIT
        
        /** RELOAD NEW DATA **/        
        $result = account($_REQUEST['user']);
    }//SUBMIT OR DELETE
    
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
								<?php include('if_auth_account.php');?>
                               
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