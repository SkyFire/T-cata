<?php
   
    include('../menu.php');
    include('includes/functions.php');
    
    $questID                        = $_REQUEST['quest'];
    
    include('loadqtable.php');
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
    }
    include('loadqtable.php');
?>
<ul>
            <li><a href="<?php echo SITE_ROOT;?>">Home</a></li>
            <li><a href="<?php echo SITE_ROOT;?>quest/index9.php" id="current">Quest</a></li>
            <li><a href="<?php echo SITE_ROOT;?>creature/index9.php">Creature</a></li>
            <li><a href="<?php echo SITE_ROOT;?>">Items</a></li>
            <li><a href="<?php echo SITE_ROOT;?>">Misc</a></li>
            <li><a href="<?php echo SITE_ROOT;?>">ID Calc</a></li>
        </ul>
    </div>
</div>
<div id="content-wrap">
  <div id="content">
    
  
    <div id="sidebar">
      <div class="sidebox">
        <h1>Sub Quest Menu</h1>
            <?php include('questsubmenu.php');?>
      </div>
    </div>
    
    <div id="main"> 
      <h1>Information About Recieving Quest</h1>
      <table width="900"><tr>
        <form method="post">
        <td><fieldset>
            <legend>&nbsp;Keys&nbsp;</legend>
                <table ><tr>
                    <td>Entry<sup>1</sup><br/><input type="text" value="<?php echo $result['entry'];?>" name="entry" size="10"></td>
                    <td>PrevQuestId<br/><input type="text" value="<?php echo $result['PrevQuestId'];?>" name="PrevQuestId" size="10"></td>
                </tr><tr>
                    <td>ExclusiveGroup<br/><input type="text" value="<?php echo $result['ExclusiveGroup'];?>" name="ExclusiveGroup" size="10"></td>
                    <td>NextQuestId<br/><input type="text" value="<?php echo $result['NextQuestId'];?>" name="NextQuestId" size="10"></td>
                </tr><tr>
                    <td>NextQuestInChain<br/><input type="text" value="<?php echo $result['NextQuestInChain'];?>" name="NextQuestInChain" size="10"></td>
                    <td>RewardXPId<br/><input type="text" value="<?php echo $result['RewXPId'];?>" name="RewXPId" size="10"></td>
                </tr></table>
        </fieldset></td>
        
        
        <td valign="top"><fieldset>
                <legend>&nbsp;Zone, Sort, Level</legend>
                    <table><tr>
                        <td>RequiredRaces<br/><input type="text" value="<?php echo $result['RequiredRaces'];?>" name="RequiredRaces" size="10"></td>
                        <td>SkillOrClassMask<br/><input type="text" value="<?php echo $result['SkillOrClassMask'];?>" name="SkillOrClassMask" size="10"></td>
                    </tr><tr>
                        <td>MinLevl<br/><input type="text" value="<?php echo $result['MinLevel'];?>" name="MinLevel" size="10"></td>
                        <td>QuestLevel<br/><input type="text" value="<?php echo $result['QuestLevel'];?>" name="QuestLevel" size="10"></td></tr><tr>
                        <td>SpecialFlags<br/><input type="text" value="<?php echo $result['SpecialFlags'];?>" name="SpecialFlags" size="10"></td>
                        <td>CharTitleId<br/><input type="text" value="<?php echo $result['CharTitleId'];?>" name="CharTitleId" size="10"></td>
                    </tr></table>
        </fieldset></td>
        
        
        <td valign="top"><fieldset>
                <legend>&nbsp;Flags</legend>
                    <table><tr>
                        <td>Type<br/><input type="text" value="<?php echo $result['Type'];?>" name="Type" size="5"></td></tr><tr>
                        <td>QuestFlags<br/><input type="text" value="<?php echo $result['QuestFlags'];?>" name="QuestFlags" size="5"></td></tr><tr>
                        <td>LimitTime<br/><input type="text" value="<?php echo $result['LimitTime'];?>" name="LimitTime" size="5"></td>
                    </tr></table>
        </fieldset></td>
       
        </tr><tr>
               
        <td><fieldset>
            <legend>&nbsp;Requirements to begin quest</legend>
                <table><tr>
                    <td>RequiredSkill<br/>
                        <input type="text" value="NOT USED" name="RequiredSkill" size="10">
                    </td>
                    <td>RequiredSkillValue<br/>
                        <input type="text" value="<?php echo $result['RequiredSkillValue'];?>" name="RequiredSkillValue" size="10">
                    </td></tr><tr>
                    <td>ReqMinRepFaction<br/>
                        <input type="text" value="<?php echo $result['RequiredMinRepFaction'];?>" name="RequiredMinRepFaction" size="10">
                    </td>
                    <td>...Value<br/>
                        <input type="text" value="<?php echo $result['RequiredMinRepValue'];?>" name="RequiredMinRepValue" size="10">
                    </td></tr><tr>
                    <td>ReqMaxRepFaction<br/>
                        <input type="text" value="<?php echo $result['RequiredMaxRepFaction'];?>" name="RequiredMaxRepFaction" size="10">
                    <td>...Value<br/>
                        <input type="text" value="<?php echo $result['RequiredMaxRepValue'];?>" name="RequiredMaxRepValue" size="10">
                    </td>        
                </tr></table>
        </fieldset></td>
                    
        <td valign="top"><fieldset>
            <legend>&nbsp;Source for quest</legend>
                <table><tr>
                    <td>SrcItemId<br/>
                        <input type="text" value="<?php echo $result['SrcItemId'];?>" name="SrcItemId" size="10">
                    </td></tr><tr>
                    <td>srcItemCount<br/>
                        <input type="text" value="<?php echo $result['SrcItemCount'];?>" name="srcItemCount" size="10">
                    </td></tr><tr>
                    <td>SrcSpell<br/>
                        <input type="text" value="<?php echo $result['SrcSpell'];?>" name="SrcSpell" size="10">
                    </td>
                </tr></table>
        </fieldset></td>
        
        </tr><tr>
        
        <td valign="top" colspan="3"><fieldset>
            <legend>&nbsp;Description of quest</legend>
                <table width="100%"><tr>
                    <td colspan="3">Title<br/>
                        <input type="text" value="<?php echo $result['Title'];?>" name="Title" size="43">
                    </td></tr><tr>
                    <td>Details<br/>
                        <textarea  rows="7" cols="30" name="Details"><?php echo $result['Details'];?></textarea>
                    </td>
                    <td>Objectives<br/>
                        <textarea  rows="7" cols="30" name="Objectives"><?php echo $result['Objectives'];?></textarea>
                    </td>
                    <td>EndText<br/>
                        <textarea  rows="4" cols="30" name="EndText"><?php echo $result['EndText'];?></textarea><br/>
                        CompletedText<br/>
                        <input type="text" name="CompletedText" size="35" value="<?php echo $result['CompletedText'];?>">
                    </td></tr><tr>
                    <td>OfferRewardText<br/>
                        <textarea  rows="7" cols="30" name="OfferRewardText"><?php echo $result['OfferRewardText'];?></textarea>
                    </td>
                    <td>RequestItemsText<br/>
                        <textarea  rows="7" cols="30" name="RequestItemsText"><?php echo $result['RequestItemsText'];?></textarea>
                    </td>
                    <td align="center">
                        ObjectiveText1<br/>
                        <input type="text" name="ObjectiveText1" value="<?php echo $result['ObjectiveText1'];?>"><br/>
                        ObjectiveText2<br/>
                        <input type="text" name="ObjectiveText2" value="<?php echo $result['ObjectiveText2'];?>"><br/>
                        ObjectiveText3<br/>
                        <input type="text" name="ObjectiveText3" value="<?php echo $result['ObjectiveText3'];?>"><br/>
                        ObjectiveText4<br/>
                        <input type="text" name="ObjectiveText4" value="<?php echo $result['ObjectiveText4'];?>"><br/>
                    </td>
                </tr></table>
        </fieldset></td>
        
        </tr><tr>
        </tr><tr>
        
        <td align="right" colspan="5"><input type="submit" value="Save" name="submit"></td>
        
    </tr></table>
        
        
    </div>