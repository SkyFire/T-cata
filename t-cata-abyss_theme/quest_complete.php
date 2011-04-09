<?php
   
    include('menu.php');
    include('includes/functions.php');
    
    $questID                        = $_REQUEST['quest'];
    include('quest_loadtable.php');
    //CHECK TO SEE IF ANYCHANGES WERE MADE AND UPDATE THEM
    if(isset($_REQUEST['submit'])){
        for($i=1;$i<=6;$i++){
            if($result['ReqItemId'.$i] != $_REQUEST['ReqItemId'.$i]){sqlUpdate($questID,'ReqItemId'.$i,$_REQUEST['ReqItemId'.$i]);}
            if($result['ReqItemCount'.$i] != $_REQUEST['ReqItemCount'.$i]){sqlUpdate($questID,'ReqItemCount'.$i,$_REQUEST['ReqItemCount'.$i]);}
            if($result['RewChoiceItemId'.$i] != $_REQUEST['RewChoiceItemId'.$i]){sqlUpdate($questID,'RewChoiceItemId'.$i,$_REQUEST['RewChoiceItemId'.$i]);}
            
        }
        for($i=1;$i<=5;$i++){
            if($result['RewRepFaction'.$i] != $_REQUEST['RewRepFaction'.$i]){sqlUpdate($questID,'RewRepFaction'.$i,$_REQUEST['RewRepFaction'.$i]);}
            if($result['RewRepValue'.$i] != $_REQUEST['RewRepValue'.$i]){sqlUpdate($questID,'RewRepValue'.$i,$_REQUEST['RewRepValue'.$i]);}
            if($result['RewRepValueId'.$i] != $_REQUEST['RewRepValueId'.$i]){sqlUpdate($questID,'RewRepValueId'.$i,$_REQUEST['RewRepValueId'.$i]);}
        }
        for($i=1;$i<=4;$i++){
            if($result['ReqSourceId'.$i] != $_REQUEST['ReqSourceId'.$i]){sqlUpdate($questID,'ReqSourceId'.$i,$_REQUEST['ReqSourceId'.$i]);}
            if($result['ReqSourceCount'.$i] != $_REQUEST['ReqSourceCount'.$i]){sqlUpdate($questID,'ReqSourceCount'.$i,$_REQUEST['ReqSourceCount'.$i]);}
            if($result['ReqCreatureOrGOId'.$i] != $_REQUEST['ReqCreatureOrGOId'.$i]){sqlUpdate($questID,'ReqCreatureOrGOId'.$i,$_REQUEST['ReqCreatureOrGOId'.$i]);}
            if($result['ReqCreatureOrGOCount'.$i] != $_REQUEST['ReqCreatureOrGOCount'.$i]){sqlUpdate($questID,'ReqCreatureOrGOCount'.$i,$_REQUEST['ReqCreatureOrGOCount'.$i]);}
            if($result['ReqSpellCast'.$i] != $_REQUEST['ReqSpellCast'.$i]){sqlUpdate($questID,'ReqSpellCast'.$i,$_REQUEST['ReqSpellCast'.$i]);}
            if($result['RewItemCount'.$i] != $_REQUEST['RewItemCount'.$i]){sqlUpdate($questID,'RewItemCount'.$i,$_REQUEST['RewItemCount'.$i]);}
            if($result['DetailsEmote'.$i] != $_REQUEST['DetailsEmote'.$i]){sqlUpdate($questID,'DetailsEmote'.$i,$_REQUEST['DetailsEmote'.$i]);}
            if($result['DetailsEmoteDelay'.$i] != $_REQUEST['DetailsEmoteDelay'.$i]){sqlUpdate($questID,'DetailsEmoteDelay'.$i,$_REQUEST['DetailsEmoteDelay'.$i]);}
            if($result['OfferRewardEmote'.$i] != $_REQUEST['OfferRewardEmote'.$i]){sqlUpdate($questID,'OfferRewardEmote'.$i,$_REQUEST['OfferRewardEmote'.$i]);}
            if($result['OfferRewardEmoteDelay'.$i] != $_REQUEST['OfferRewardEmoteDelay'.$i]){sqlUpdate($questID,'OfferRewardEmoteDelay'.$i,$_REQUEST['OfferRewardEmoteDelay'.$i]);}
        }
        if($result['RepObjectiveFaction'] != $_REQUEST['RepObjectiveFaction']){sqlUpdate($questID,'RepObjectiveFaction',$_REQUEST['RepObjectiveFaction']);}
        if($result['RepObjectiveValue'] != $_REQUEST['RepObjectiveValue']){sqlUpdate($questID,'RepObjectiveValue',$_REQUEST['RepObjectiveValue']);}
        if($result['PointMapId'] != $_REQUEST['PointMapId']){sqlUpdate($questID,'PointMapId',$_REQUEST['PointMapId']);}
        if($result['PointX'] != $_REQUEST['PointX']){sqlUpdate($questID,'PointX',$_REQUEST['PointX']);}
        if($result['PointY'] != $_REQUEST['PointY']){sqlUpdate($questID,'PointY',$_REQUEST['PointY']);}
        if($result['PointOpt'] != $_REQUEST['PointOpt']){sqlUpdate($questID,'PointOpt',$_REQUEST['PointOpt']);}
        if($result['CompleteEmote'] != $_REQUEST['CompleteEmote']){sqlUpdate($questID,'CompleteEmote',$_REQUEST['CompleteEmote']);}
        if($result['IncompleteEmote'] != $_REQUEST['IncompleteEmote']){sqlUpdate($questID,'IncompleteEmote',$_REQUEST['IncompleteEmote']);}
        if($result['StartScript'] != $_REQUEST['StartScript']){sqlUpdate($questID,'StartScript',$_REQUEST['StartScript']);}
        if($result['CompleteScript'] != $_REQUEST['CompleteScript']){sqlUpdate($questID,'CompleteScript',$_REQUEST['CompleteScript']);}
        if($result['RewOrReqMoney'] != $_REQUEST['RewOrReqMoney']){sqlUpdate($questID,'RewOrReqMoney',$_REQUEST['RewOrReqMoney']);}
        if($result['RewSpell'] != $_REQUEST['RewSpell']){sqlUpdate($questID,'RewSpell',$_REQUEST['RewSpell']);}
        if($result['RewMoneyMaxLevel'] != $_REQUEST['RewMoneyMaxLevel']){sqlUpdate($questID,'RewMoneyMaxLevel',$_REQUEST['RewMoneyMaxLevel']);}
        if($result['RewSpellCast'] != $_REQUEST['RewSpellCast']){sqlUpdate($questID,'RewSpellCast',$_REQUEST['RewSpellCast']);}
        if($result['RewMailTemplateId'] != $_REQUEST['RewMailTemplateId']){sqlUpdate($questID,'RewMailTemplateId',$_REQUEST['RewMailTemplateId']);}
        if($result['RewMailDelaySecs'] != $_REQUEST['RewMailDelaySecs']){sqlUpdate($questID,'RewMailDelaySecs',$_REQUEST['RewMailDelaySecs']);}
        if($result['RewHonorAddition'] != $_REQUEST['RewHonorAddition']){sqlUpdate($questID,'RewHonorAddition',$_REQUEST['RewHonorAddition']);}
        if($result['RewHonorMultiplier'] != $_REQUEST['RewHonorMultiplier']){sqlUpdate($questID,'RewHonorMultiplier',$_REQUEST['RewHonorMultiplier']);}
        if($result['SpecialFlags'] != $_REQUEST['SpecialFlags']){sqlUpdate($questID,'SpecialFlags',$_REQUEST['SpecialFlags']);}
        if($result['SuggestedPlayers'] != $_REQUEST['SuggestedPlayers']){sqlUpdate($questID,'SuggestedPlayers',$_REQUEST['SuggestedPlayers']);}
        if($result['CharTitleId'] != $_REQUEST['CharTitleId']){sqlUpdate($questID,'CharTitleId',$_REQUEST['CharTitleId']);}
        if($result['BonusTalents'] != $_REQUEST['BonusTalents']){sqlUpdate($questID,'BonusTalents',$_REQUEST['BonusTalents']);}
        if($result['Method'] != $_REQUEST['Method']){sqlUpdate($questID,'Method',$_REQUEST['Method']);}
        if($result['PlayersSlain'] != $_REQUEST['PlayersSlain']){sqlUpdate($questID,'PlayersSlain',$_REQUEST['PlayersSlain']);}
    }
    include('quest_loadtable.php');
    
    
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
                    <?php include('quest_submenu.php');?>
            </div>
        </div>
    
    <div id="main"> 
        <h1>Quest Turn In</h1>
       
        <table width="900"><tr>
             <form method="post">
            <td><fieldset>
                <legend> Requirements for finishing a quest</legend>
                    <table ><tr>
                        <td valign="top">ReqItemId1<br>
                            <?php for($i=1;$i<=6;$i++){
                                $value = $result['ReqItemId'.$i];                    
                                echo "<input  type=\"text\" name=\"ReqItemId$i\" value=\"".$value."\"><br/>";
                            }
                             ?>  
                        </td>
                        <td valign="top">...Count1<br/>
                            <?php for($i=1;$i<=6;$i++){
                                $value = $result['ReqItemCount'.$i];                    
                                echo "<input  type=\"text\" name=\"ReqItemCount$i\" value=\"".$value."\"><br/>";
                            }?>
                        </td>
                        <td valign="TOP">ReqSourceId1<br/>
                            <?php for($i=1;$i<=4;$i++){
                                $value = $result['ReqSourceId'.$i];                    
                                echo "<input  type=\"text\" name=\"ReqSourceId$i\" value=\"".$value."\"><br/>";
                            }?>
                        </td>
                        <td valign="top">...Count<br/>
                            <?php for($i=1;$i<=4;$i++){
                                $value = $result['ReqSourceCount'.$i];                    
                                echo "<input  type=\"text\" name=\"ReqSourceCount$i\" value=\"".$value."\"><br/>";
                            }?>
                        </td></tr><tr>
                        <td valign="top">
                            <?php
                                for($i = 1;$i<=4;$i++){
                                    $value = $result['ReqCreatureOrGOId'.$i];
                                    echo "ReqCreatureOrGOId".$i."<br/>";
                                    echo "<input class='inputbox' type=\"text\" name=\"ReqCreatureOrGOId$i\" value=\"".$value."\"><br/>";
                                }
                            ?>
                        </td>
                        <td valign="top">                
                            <?php
                                for($i = 1;$i<=4;$i++){
                                    $value = $result['ReqCreatureOrGOCount'.$i];
                                    echo "...Count".$i."<br/>";
                                    echo "<input class='inputbox' type=\"text\" name=\"ReqCreatureOrGOCount$i\" value=\"".$value."\"><br/>";
                                }
                            ?>
                        </td>
                        <td valign="top">
                             <?php
                                for($i = 1;$i<=4;$i++){
                                    $value = $result['ReqSpellCast'.$i];
                                    echo "ReqSpellCast".$i."<br/>";
                                    echo "<input class='inputbox' type=\"text\" name=\"ReqSpellCast$i\" value=\"".$value."\"><br/>";
                                }
                            ?>               
                        </td>
                        <td valign="top">
                            RepObjectiveFaction<br/>
                            <input type="text" name="RepObjectiveFaction" value="<?php echo $result['RepObjectiveFaction'];?>"><br/>
                            RepObjectiveValue<br/>
                            <input type="text" name="RepObjectiveValue" value="<?php echo $result['RepObjectiveValue'];?>">
                        </td>
                    </tr></table>
            </fieldset></td>
            
            </tr><tr>
            
            <td valign="top"><p/><fieldset>
                <legend> Emotions</legend>
                    <table size="15"><tr>
                        <td>PointMapId<br><input type="text" name="PointMapId" value="<?php echo $result['PointMapId'];?>"></td>
                        <td>PointX<br/><input type="text" name="PointX" value="<?php echo $result['PointX'];?>"></td>
                        <td>PointY<br/><input type="text" name="PointY" value="<?php echo $result['PointY'];?>"></td>
                        <td>PointOpt<br/><input type="text" name="PointOpt" value="<?php echo $result['PointOpt'];?>"></td>
                        </tr>
                        <?php
                            for($i=1;$i<=4;$i++){
                            ?>
                                <tr><td>DetailsEmote<?php echo $i;?><br>
                                    <input type="text" name="DetailsEmote<?php echo $i;?>" value="<?php echo $result['DetailsEmote'.$i];?>"></td>
                                <td>DetailsEmoteDelay<?php echo $i;?><br/>
                                    <input type="text" name="DetailsEmoteDelay<?php echo $i;?>" value="<?php echo $result['DetailsEmoteDelay'.$i];?>"></td>
                                <td>OfferRewardEmote<?php echo $i;?><br/>
                                    <input type="text" name="OfferRewardEmote<?php echo $i;?>" value="<?php echo $result['OfferRewardEmote'.$i];?>"></td>
                                <td>OfferRewardEmoteDelay<?php echo $i;?><br/>
                                    <input type="text" name="OfferRewardEmoteDelay<?php echo $i;?>" value="<?php echo $result['OfferRewardEmoteDelay'.$i];?>"></td>
                                </tr>           
                            <?php } ?>
                        <tr><td>CompleteEmote<br/><input type="text" name="CompleteEmote" value="<?php echo $result['CompleteEmote'];?>"></td>
                            <td>IncompleteEmote<br/><input type="text" name="IncompleteEmote" value="<?php echo $result['IncompleteEmote'];?>"></td>
                            <td>StartScript<br/><input type="text" name="StartScript" value="<?php echo $result['StartScript'];?>"></td>
                            <td>CompleteScript<br/><input type="text" name="CompleteScript" value="<?php echo $result['CompleteScript'];?>"></td>
                        </tr>
                    </table>
            </fieldset></td>
            
            </tr><tr>
            
            <td valign="top"><p/><fieldset>
                <legend>Rewards for quest</legend>
                    <table size="15">
                        <?php
                            for($i=1;$i<=6;$i++){
                                echo '<tr><td>RewChoiceItemId'.$i.'<br><input type="text" name="RewChoiceItemId'.$i.'" value="'.$result['RewChoiceItemId'.$i].'"></td>';
                                echo '<td>...Count'.$i.'<br><input type="text" name="RewChoiceItemCount'.$i.'" value="'.$result['RewChoiceItemCount'.$i].'"></td>';
                                if($i<=4){
                                    echo '<td>RewItemId'.$i.'<br><input type="text" name="RewItemId'.$i.'" value="'.$result['RewItemId'.$i].'"></td>';
                                    echo '<td>...Count'.$i.'<br><input type="text" name="RewItemCount'.$i.'" value="'.$result['RewItemCount'.$i].'"></td>';
                                }
                                if($i==5){echo '<td>RewOrReqMoney<br><input type="text" name="RewOrReqMoney" value="'.$result['RewOrReqMoney'].'"></td>';
                                        echo '<td>RewSpell<br><input type="text" name="RewSpell" value="'.$result['RewSpell'].'"></td>';}
                                if($i==6){echo '<td>RewMoneyMaxLevel<br><input type="text" name="RewMoneyMaxLevel" value="'.$result['RewMoneyMaxLevel'].'"></td>';
                                        echo '<td>RewSpellCast<br><input type="text" name="RewSpellCast" value="'.$result['RewSpellCast'].'"></td>';}
                                echo '</tr>';
                            }
                            for($i=1;$i<=5;$i++){
                                echo '<tr><td>RewRepFaction'.$i.'<br><input type="text" name="RewRepFaction'.$i.'" value="'.$result['RewRepFaction'.$i].'"></td>';
                                echo '<td>...Value'.$i.'<br><input type="text" name="RewRepValue'.$i.'" value="'.$result['RewRepValue'.$i].'"></td>';
                                echo '<td>RewRepValueId'.$i.'<br><input type="text" name="RewRepValueId'.$i.'" value="'.$result['RewRepValueId'.$i].'"></td>';
                            }
                        ?>
                     </tr> <tr>
                        <?php
                           echo '<td>RewMailTemplateId<br><input type="text" name="RewMailTemplateId" value="'.$result['RewMailTemplateId'].'"></td>';
                           echo '<td>RewMailDelaySecs<br><input type="text" name="RewMailDelaySecs" value="'.$result['RewMailDelaySecs'].'"></td>';
                           echo '<td>RewHonorAddition<br><input type="text" name="RewHonorAddition" value="'.$result['RewHonorAddition'].'"></td>';
                           echo '<td>RewHonorMultiplier<br><input type="text" name="RewHonorMultiplier" value="'.$result['RewHonorMultiplier'].'"></td>';
                           ?>
                        </tr>
                    </table>
            </fieldset></td>
            
            </tr><tr>
            
            <td valign="top"><p><fieldset>
                <legend>Other</legend>
                    <table size="15">
                        <tr><td>AreaTrigger<br/><input type="text" name="AreaTrigger" value="NOT USED"></td>
                            <td>SpecialFlags<br/><input type="text" name="SpecialFlags" value="<?php echo $result['SpecialFlags'];?>"></td>
                            <td>SuggestedPlayers<br/><input type="text" name="SuggestedPlayers" value="<?php echo $result['SuggestedPlayers'];?>"></td>
                        </tr>
                        <tr><td>CharTitleId<br/><input type="text" name="CharTitleId" value="<?php echo $result['CharTitleId'];?>"></td>
                            <td>PlayersSlain<br/><input type="text" name="PlayersSlain" value="<?php echo $result['PlayersSlain'];?>"></td>
                            <td>BonusTalents<br/><input type="text" name="BonusTalents" value="<?php echo $result['BonusTalents'];?>"></td>
                            <td>Method<br/><input type="text" name="Method" value="<?php echo $result['Method'];?>"></td>
                        </tr>
                    </table>
            </fieldset></td>
            
            </tr><tr>
                <td colspan="3" align="right"><input type="submit" name="submit" value="Save"></td>
        </tr></table>
    </div>
    </div>
<div id="footer">
</div>
      
      
      
      