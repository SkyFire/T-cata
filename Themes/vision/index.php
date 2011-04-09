<?php
        include('config.php');
?>
<html>
    <head>
	<title><?php echo SITE_TITLE;?></title>
	<link href="vision.css" rel="stylesheet" type="text/css" />
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
                    <div class="CntHead"><div class="CntHeadTitle">Welcome to T-Cata: Cataclysm DB Editor</div></div>
                        <div class="CntFiller">
                            <div class="CntInfo">
                                
                                <div align="justify">
                                    Thank you for using <strong>T-Cata</strong>. Over 3 months of non stop writing went into this.
                                    If you distribute this with any changes, please leave any credits (definatealy mine) intact.
                                    <p>Please feel free to use this app as you please,  I ask that any references to <strong>T-Cata SkyFire
                                    Cataclysm DB Editor</strong> is not removed.<p/>
                                    Thanks for viewing and enjoy!
                                </div>
                                
                            </div>
                        </div>
                        <div class="CntFooter"></div>
                        </div>
        
                        <!--### SOME CONTENT CRAP
                                ADD THESE "CNTBOX" FOR ADDING SECTIONS -->
                        <div class="CntBox">
                            <div class="CntHead">
                                <div class="CntHeadTitle">Banner Image</div></div>
                                <div class="CntFiller">
                                    <div class="CntInfo">
                                <div align="justify">
                                &nbsp;You can locate the banner image within the 'theme' folder 
                                within the root directory titled 'banner.jpg'<br />
                                <br />
                                <br />
                                You can edit the banner image and replace the original banner 
                                with your revised version, just be sure to not to rename the 
                                file name unless your familiar with how to edit the CSS 'header' 
                                ID that contains the banner image location and name. I made some notes
                                concerning that.<br />
                                <br />
                                &nbsp;Any question you have are you can contact me at 
                                <a target="_blank" class="LINKurl" href="http://themekings.net/comms/index.php?topic=63.msg">
                                SkyFire Project Here</a> .<br />
                                Or <a href="mailto:rixgamez@gmail.com">Email me here</a>
                                <br />
                                Thanks, and enjoy!<br />
                                </div>
                                    </div>
                            </div>
                        <div class="CntFooter"></div>
                    </div>
                    <!--### END OF CONTENT CRAP! -->    
                        
                        
                </div>

                <!--### RIGHT COLUMN -->
                <div id="col-r">

                    <div class="NavBox">
                            <div class="NavHead"><div class="NavHeadTitle">Navigation Title</div></div>
                                <div class="nav-menu">
                                    <ul>
                                            <li class="Level2"><a href="#">Link To Some Site Or Stats</a></li>
                                            <li class="Level1"><a href="#">Link To Some Site Or Stats</a></li>
                                            <li class="Level2"><a href="#">Link To Some Site Or Stats</a></li>
                                            <li class="Level1"><a href="#">Link To Some Site Or Stats</a></li>
                                            <li class="Level2"><a href="#">Link To Some Site Or Stats</a></li>
                                            <li class="Level1"><a href="#">Link To Some Site Or Stats</a></li>
                                    </ul>
                                </div>
                            <div class="NavFooter"></div>
                    </div>


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