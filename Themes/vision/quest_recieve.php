<?php
    // LOAD A BASIC LANG SCRIPT
    include('lang/en.php');
    
    // LOAD SITE SCRIPTS
    include('include/config.php');
    include('include/functions.php');
    
    //CONNECT TO WORLD DB
    mysql_selectdb(SQL_WORLD_DATABASE);
    
    //MAKE SURE QUEST IS SET OR SEND THEM BACK TO SEARCH
    if(!isset($_REQUEST['quest'])){header('location:quest_search.php');}
    
    //LOAD QUEST INFO - LEFT NAME AS "RESULT" FOR LEGACY REASONS
    $questID = $_REQUEST['quest'];
    $result = quest($questID);
    
    
    if(isset($_REQUEST['submit'])){
        //CHECK EACH ENTRY FOR ANY CHANGES
        //IF ENTRY HAS BEEN CHANGED, I TREAT IT AS A NEW QUEST LINE
        //THEN EACH SUBSEQUENT CHECK WILL BE APPLIED TO THE NEW ENTRY ID
        if($_REQUEST['entry'] != $result['entry']){
            $sql = "INSERT INTO quest_template (entry) VALUE ($Entry)";
            $sql = @mysql_query($sql) or die("Cannot Insert Entry Item<br/>See QUEST1.PHP");    
        }
        if($_REQUEST['PrevQuestId'] != $result['PrevQuestId']){sqlUpdate($questID,'PrevQuestId',$_REQUEST['PrevQuestId']);}
        if($_REQUEST['ExclusiveGroup']!=$result['ExclusiveGroup']){sqlUpdate($questID,'ExclusiveGroup',$_REQUEST['ExclusiveGroup']);}
        if($_REQUEST['NextQuestId']!=$result['NextQuestId']){sqlUpdate($questID,'NextQuestId',$_REQUEST['NextQuestId']);}
        if($_REQUEST['NextQuestInChain']!=$result['NextQuestInChain']){sqlUpdate($questID,'NextQuestInChain',$_REQUEST['NextQuestInChain']);}
        if($_REQUEST['RewXPId']!=$result['RewXPId']){sqlUpdate($questID,'RewXPId',$_REQUEST['RewXPId']);}
        if($_REQUEST['RequiredRaces']!=$result['RequiredRaces']){sqlUpdate($questID,'RequiredRaces',$_REQUEST['RequiredRaces']);}
        if($_REQUEST['SkillOrClassMask']!=$result['SkillOrClassMask']){sqlUpdate($questID,'SkillOrClassMask',$_REQUEST['SkillOrClassMask']);}
        if($_REQUEST['MinLevel']!=$result['MinLevel']){sqlUpdate($questID,'MinLevel',$_REQUEST['MinLevel']);}
        if($_REQUEST['QuestLevel']!=$result['QuestLevel']){sqlUpdate($questID,'QuestLevel',$_REQUEST['QuestLevel']);}
        if($_REQUEST['Type']!=$result['Type']){sqlUpdate($questID,'Type',$_REQUEST['Type']);}
        if($_REQUEST['QuestFlags']!=$result['QuestFlags']){sqlUpdate($questID,'QuestFlags',$_REQUEST['QuestFlags']);}
        if($_REQUEST['LimitTime']!=$result['LimitTime']){sqlUpdate($questID,'LimitTime',$_REQUEST['LimitTime']);}
        if($_REQUEST['RequiredSkillValue']!=$result['RequiredSkillValue']){sqlUpdate($questID,'RequiredSkillValue',$_REQUEST['RequiredSkillValue']);}
        if($_REQUEST['RequiredMinRepFaction']!=$result['RequiredMinRepFaction']){sqlUpdate($questID,'RequiredMinRepFaction',$_REQUEST['RequiredMinRepFaction']);}
        if($_REQUEST['RequiredMinRepValue']!=$result['RequiredMinRepValue']){sqlUpdate($questID,'RequiredMinRepValue',$_REQUEST['RequiredMinRepValue']);}
        if($_REQUEST['RequiredMaxRepFaction']!=$result['RequiredMaxRepFaction']){sqlUpdate($questID,'RequiredMaxRepFaction',$_REQUEST['RequiredMaxRepFaction']);}
        if($_REQUEST['RequiredMaxRepValue']!=$result['RequiredMaxRepValue']){sqlUpdate($questID,'RequiredMaxRepValue',$_REQUEST['RequiredMaxRepValue']);}
        if($_REQUEST['SrcItemId']!=$result['SrcItemId']){sqlUpdate($questID,'SrcItemId',$_REQUEST['SrcItemId']);}
        if($_REQUEST['SrcSpell']!=$result['SrcSpell']){sqlUpdate($questID,'SrcSpell',$_REQUEST['SrcSpell']);}
        if($_REQUEST['Title']!=$result['Title']){sqlUpdate($questID,'Title',$_REQUEST['Title']);}
        if($_REQUEST['Details']!=$result['Details']){sqlUpdate($questID,'Details',$_REQUEST['Details']);}
        if($_REQUEST['Objectives']!=$result['Objectives']){sqlUpdate($questID,'Objectives',$_REQUEST['Objectives']);}
        if($_REQUEST['EndText']!=$result['EndText']){sqlUpdate($questID,'EndText',$_REQUEST['EndText']);}
        if($_REQUEST['CompletedText']!=$result['CompletedText']){sqlUpdate($questID,'CompletedText',$_REQUEST['CompletedText']);}
        if($_REQUEST['OfferRewardText']!=$result['OfferRewardText']){sqlUpdate($questID,'OfferRewardText',$_REQUEST['OfferRewardText']);}
        if($_REQUEST['RequestItemsText']!=$result['RequestItemsText']){sqlUpdate($questID,'RequestItemsText',$_REQUEST['RequestItemsText']);}
        if($_REQUEST['ObjectiveText1']!=$result['ObjectiveText1']){sqlUpdate($questID,'ObjectiveText1',$_REQUEST['ObjectiveText1']);}
        if($_REQUEST['ObjectiveText2']!=$result['ObjectiveText2']){sqlUpdate($questID,'ObjectiveText2',$_REQUEST['ObjectiveText2']);}
        if($_REQUEST['ObjectiveText3']!=$result['ObjectiveText3']){sqlUpdate($questID,'ObjectiveText3',$_REQUEST['ObjectiveText3']);}
        if($_REQUEST['ObjectiveText4']!=$result['ObjectiveText4']){sqlUpdate($questID,'ObjectiveText4',$_REQUEST['ObjectiveText4']);}
        if($_REQUEST['CharTitleId']!=$result['CharTitleId']){sqlUpdate($questID,'CharTitleId',$_REQUEST['CharTitleId']);}
        if($_REQUEST['SpecialFlags']!=$result['SpecialFlags']){sqlUpdate($questID,'SpecialFlags',$_REQUEST['SpecialFlags']);}
        
        //LOAD QUEST INFO - LEFT NAME AS "RESULT" FOR LEGACY REASONS
        $questID = $_REQUEST['quest'];
        $result = quest($questID);
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
                    <div class="CntHead"><div class="CntHeadTitle">What you need to recieve the quest:&nbsp;
                    <font color=#ffff00><?php echo $result['Title'];?></font></div></div>
                        <div class="CntFiller">
                            <div class="CntInfo">
                                <form method="post">
                                    <?php include('if_quest_recieve.php');?>
                                </form>                              
                             </div>
                        </div>
                        <div class="CntFooter"></div>
                    </div></div>    
                           
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