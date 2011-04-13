<?php
    // CHECK TO SEE IF THEY HAVE A CONFIG FILE
    // DEFAULT IS THE DIST FILE
    if(!file_exists('include/config.php')){
        header('location:include/install.php');
    }
    
    // LOAD A BASIC LANG SCRIPT
    include('lang/en.php');
    
    // LOAD CONFIGURATION SCRIPT
    include('include/config.php');
    
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
									<center>
										<p/><font color="#ff0000">NOTE: You will not see this page again! You might want to read it</font><p/>
									</center>
                                    Thank you for using <strong>T-Cata</strong>. Many months of non stop writing went into this (and it is far from finished).
									My first
									idea was to make another .exe version (much like QUICE), however there were a few other projects in the
									making as such. However, there was not one for php, which I never figured out why. would make a great way
									to edit your server remotely (with the correct settings). So off I went :-)<p/>
									
                                    You are welcome to use this app as you please. Do not change any references to me (the author) as
									a lot of time went into this "solo" - and besides, its rude.<br/>
									<p/>I have written this as simple as I could so that even those that know very little of php, could at least
									make some simple changes. The basic format is pretty simple. anytihng that begins with <span class="npcNames">if_*.php</span> is the
									tables and display. without the <span class="npcNames">if_*</span> prefix, it is the site design template. I did this so that if you want to
									change the design, it could be done with little modifications (not for rookies - and I would wait til the code cleanup is done
									so that you can make sense of most of it). Simply make your design,
									then either use an <span class="npcNames">iframe</span>  or an <span class="npcNames">include</span>. You will
									still need to mod the <span class="npcNames">if_*.php</span> due to some php coding that was needed.
									<p>
									Those of you who are not into coding, (or even if you are), I am aware, at the time of this writing, of the
									messy code. :-) Once this project is complete, I will be going through and cleaning up everything. So if you are
									reading this now, you most likely have a "pre-release" for viewing and testing - and this should not be a
									concern.
                                    <p>Again,  I ask that any references to <span class="npcNames">T-Cata SkyFire
                                    Cataclysm DB Editor</span> is not removed.<p/>
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
                                <div class="CntHeadTitle">Acknowledgments</div></div>
                                <div class="CntFiller">
                                    <div class="CntInfo">
                                <div align="justify">
									This project is taking way longer that I expected (or maybe I bit off a little more
									than I thought LOL), either way, it is an enjoyable one. However, none of this would be
									possible without the following people, projects and software:<p>
									
									<ul>
										<li><a href="http://www.projectskyfire.org" target="_blank" class="LINKurl" >Project Skyfire</a><br>
										For taking a stab at a very daunting task of getting the CATACLYSM to at least run.</li>
										<li><a href="http://quice.indomit.ru/"  target="_blank" class="LINKurl" >QUICE</a><br>
											Who made a fabulous program for making editing the databases a breeze and giving me
											not only the idea to preceed with a php version for
											<a href="http://www.projectskyfire.org" target="_blank" class="LINKurl" >Project Skyfire</a>, but a good
											model to follow.</li>
										<li><a target="_blank" class="LINKurl" href="http://themekings.net">Theme Kings!</a><br/>
											I am utterly speechless at the high quality of themes that you put out for free. While the selection
											is thin, I was able to convert one to fit the CATACLYSM theme. Really saved me time designing
											one from scratch!!</li>
										<li>If I missed someone/thing, let me know and I will add it here.</li>
									</ul>
											<p/>
									<center><h4>This project is dedicated to my sons and my nephew</h4>
                                <p />
                                &nbsp;Any question you have are you can contact me at 
                                <a href="http://www.projectskyfire.org" target="_blank" class="LINKurl" >Project Skyfire</a>
                                SkyFire Project </a> <br><h4>username: KLYXMASTER </h4><br />
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
<!--
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
                    
    -->            

                    <?php include('calc_mnu.php');?>


                </div></div>
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