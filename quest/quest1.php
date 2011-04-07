<?php
   
    //ENTRY IS HANDLED DIFFERENTLY
    //IF USER SUBMITTED UPDATE CHANGES
    //ONLY NEED TO UPDATE IF THE INPUTS ARE DIFFERENT FROM ORIGINAL
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
        
       
        include('loadqtable.php');
        //unlink("sql.txt");
    }
    //include('questmenu.php');
?>
<html>
    <head>
        <title><?php echo $result['Title'];?></title>
         <link rel="stylesheet" href="../scripts/tcata.css" type="text/css">   
    </head>
<body>
<center>
<form method="post">
<table width="800"><tr>
<td class="tablefont" >Keys<br/>
    <table class="resultsborder" size="10"><tr>
        <td class="tablefont" >Entry<sup>1</sup><br/>
            <input class="inputbox"  type="text" value="<?php echo $result['entry'];?>" name="entry" size="10">
        </td>
        <td class="tablefont" >PrevQuestId<br/>
            <input class="inputbox"  type="text" value="<?php echo $result['PrevQuestId'];?>" name="PrevQuestId" size="10">
        </td></tr><tr>
        <td class="tablefont" >ExclusiveGroup<br/>
            <input class="inputbox"  type="text" value="<?php echo $result['ExclusiveGroup'];?>" name="ExclusiveGroup" size="10">
        </td>
        <td class="tablefont" >NextQuestId<br/>
            <input class="inputbox"  type="text" value="<?php echo $result['NextQuestId'];?>" name="NextQuestId" size="10">
        </td></tr><tr>
        <td class="tablefont" >NextQuestInChain<br/>
            <input class="inputbox"  type="text" value="<?php echo $result['NextQuestInChain'];?>" name="NextQuestInChain" size="10">
        <td class="tablefont" >RewardXPId<br/>
            <input class="inputbox"  type="text" value="<?php echo $result['RewXPId'];?>" name="RewXPId" size="10">
        </td></tr><tr>
        
    </tr></table>
</td>
<td class="tablefont"  valign="top">Zone, Sort, Level<br/>
    <table class="resultsborder" size="10"><tr>
        <td class="tablefont" >RequiredRaces<br/>
            <input class="inputbox"  type="text" value="<?php echo $result['RequiredRaces'];?>" name="RequiredRaces" size="10">
        </td>
        <td class="tablefont" >SkillOrClassMask<br/>
            <input class="inputbox"  type="text" value="<?php echo $result['SkillOrClassMask'];?>" name="SkillOrClassMask" size="10">
        </td></tr><tr>
        <td class="tablefont" >MinLevl<br/>
            <input class="inputbox"  type="text" value="<?php echo $result['MinLevel'];?>" name="MinLevel" size="10">
        </td>
        <td class="tablefont" >QuestLevel<br/>
            <input class="inputbox"  type="text" value="<?php echo $result['QuestLevel'];?>" name="QuestLevel" size="10">
        </td>
    </tr></table>
</td>
<td class="tablefont"  valign="top">Flags<br/>
    <table class="resultsborder" ><tr>
        <td class="tablefont" >Type<br/>
            <input class="inputbox"  type="text" value="<?php echo $result['Type'];?>" name="Type" size="5">
        </td></tr><tr>
        <td class="tablefont" >QuestFlags<br/>
            <input class="inputbox"  type="text" value="<?php echo $result['QuestFlags'];?>" name="QuestFlags" size="5">
        </td></tr><tr>
        <td class="tablefont" >LimitTime<br/>
            <input class="inputbox"  type="text" value="<?php echo $result['LimitTime'];?>" name="LimitTime" size="5">
        </td>
    </tr></table>
</td>
<td class="tablefont"  valign="top">Requirements to begin quest<br/>
    <table class="resultsborder" size="10"><tr>
        <td class="tablefont" >RequiredSkill<br/>
            <input class="inputbox"  type="text" value="NOT USED" name="RequiredSkill" size="10">
        </td>
        <td class="tablefont" >RequiredSkillValue<br/>
            <input class="inputbox"  type="text" value="<?php echo $result['RequiredSkillValue'];?>" name="RequiredSkillValue" size="10">
        </td></tr><tr>
        <td class="tablefont" >ReqMinRepFaction<br/>
            <input class="inputbox"  type="text" value="<?php echo $result['RequiredMinRepFaction'];?>" name="RequiredMinRepFaction" size="10">
        </td>
        <td class="tablefont" >...Value<br/>
            <input class="inputbox"  type="text" value="<?php echo $result['RequiredMinRepValue'];?>" name="RequiredMinRepValue" size="10">
        </td></tr><tr>
        <td class="tablefont" >ReqMaxRepFaction<br/>
            <input class="inputbox"  type="text" value="<?php echo $result['RequiredMaxRepFaction'];?>" name="RequiredMaxRepFaction" size="10">
        <td class="tablefont" >...Value<br/>
            <input class="inputbox"  type="text" value="<?php echo $result['RequiredMaxRepValue'];?>" name="RequiredMaxRepValue" size="10">
        </td>        
    </tr></table>
</td>
<td class="tablefont"  valign="top">Source For Quest<br/>
    <table class="resultsborder" ><tr>
        <td class="tablefont" >SrcItemId<br/>
            <input class="inputbox"  type="text" value="<?php echo $result['SrcItemId'];?>" name="SrcItemId" size="10">
        </td></tr><tr>
        <td class="tablefont" >srcItemCount<br/>
            <input class="inputbox"  type="text" value="<?php echo $result['SrcItemCount'];?>" name="srcItemCount" size="10">
        </td></tr><tr>
        <td class="tablefont" >SrcSpell<br/>
            <input class="inputbox"  type="text" value="<?php echo $result['SrcSpell'];?>" name="SrcSpell" size="10">
        </td>
    </tr></table>
</td>
</tr><tr>
<td class="tablefont"  valign="top" colspan="5">
    <span style="background-color:#ffff00;font-family:verdana;">
            <font color="#ff0000" size="2">
                &nbsp;<sup>1</sup>Changing the <b>'ENTRY'</b> will be treated as adding a <b>NEW</b> quest - Use Caution! (Untested)&nbsp;
            </font>
            </span><p/>
    Description of Quest<br/>
    <table class="resultsborder" width="100%"><tr>
        <td class="tablefont"  colspan="3">Title<br/>
            <input class="inputbox"  type="text" value="<?php echo $result['Title'];?>" name="Title" size="43">
        </td></tr><tr>
        <td class="tablefont" >Details<br/>
            <textarea class="inputbox"   rows="7" cols="30" name="Details"><?php echo $result['Details'];?></textarea>
        </td>
        <td class="tablefont" >Objectives<br/>
            <textarea class="inputbox"   rows="7" cols="30" name="Objectives"><?php echo $result['Objectives'];?></textarea>
        </td>
        <td class="tablefont" >EndText<br/>
            <textarea class="inputbox"   rows="4" cols="30" name="EndText"><?php echo $result['EndText'];?></textarea><br/>
            CompletedText<br/>
            <input class="inputbox"  type="text" name="CompletedText" size="35" value="<?php echo $result['CompletedText'];?>">
        </td></tr><tr>
        <td class="tablefont" >OfferRewardText<br/>
            <textarea class="inputbox"   rows="7" cols="30" name="OfferRewardText"><?php echo $result['OfferRewardText'];?></textarea>
        </td>
        <td class="tablefont" >RequestItemsText<br/>
            <textarea class="inputbox"   rows="7" cols="30" name="RequestItemsText"><?php echo $result['RequestItemsText'];?></textarea>
        </td>
        <td class="tablefont"  align="center">
            ObjectiveText1<br/>
            <input class="inputbox"  type="text" name="ObjectiveText1" value="<?php echo $result['ObjectiveText1'];?>"><br/>
            ObjectiveText2<br/>
            <input class="inputbox"  type="text" name="ObjectiveText2" value="<?php echo $result['ObjectiveText2'];?>"><br/>
            ObjectiveText3<br/>
            <input class="inputbox"  type="text" name="ObjectiveText3" value="<?php echo $result['ObjectiveText3'];?>"><br/>
            ObjectiveText4<br/>
            <input class="inputbox"  type="text" name="ObjectiveText4" value="<?php echo $result['ObjectiveText4'];?>"><br/>
        
        </td>
    </tr></table>  
</td></tr><tr>
<td class="tablefont"  align="right" colspan="5">
    <input type="submit" value="Save" name="submit">
</td>
</tr></table>
</form>
</center>
</body>
</html>