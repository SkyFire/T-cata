<?php

?>
<fieldset>
    <legend>Requirements to Finish Quest</legend>
        <table>
            <tr>
                <td>
                    ReqItemId1<br>
                    <?php
                    for($i=1;$i<=6;$i++){
                        $value = $result['ReqItemId'.$i];                    
                        echo "<input  type=\"text\" name=\"ReqItemId$i\" value=\"".$value."\"><br/>";
                    }?>  
                </td>
                <td valign="top">...Count1<br/>
                    <?php
                        for($i=1;$i<=6;$i++){
                            $value = $result['ReqItemCount'.$i];                    
                            echo "<input  type=\"text\" name=\"ReqItemCount$i\" value=\"".$value."\"><br/>";
                        }?>
                </td>
                <td valign="TOP">ReqSourceId1<br/>
                    <?php
                    for($i=1;$i<=4;$i++){
                        $value = $result['ReqSourceId'.$i];                    
                        echo "<input  type=\"text\" name=\"ReqSourceId$i\" value=\"".$value."\"><br/>";
                    }?>
                </td>
                <td valign="top">...Count<br/>
                    <?php
                        for($i=1;$i<=4;$i++){
                        $value = $result['ReqSourceCount'.$i];                    
                        echo "<input  type=\"text\" name=\"ReqSourceCount$i\" value=\"".$value."\"><br/>";
                    }?>
                </td>
            </tr><tr>
            
                <td valign="top">
                    <?php
                        for($i = 1;$i<=4;$i++){
                            $value = $result['ReqCreatureOrGOId'.$i];
                            echo "ReqCreatureOrGOId".$i."<br/>";
                            echo "<input  type=\"text\" name=\"ReqCreatureOrGOId$i\" value=\"".$value."\"><br/>";
                        }?>
                </td>
                <td valign="top">                
                    <?php
                        for($i = 1;$i<=4;$i++){
                            $value = $result['ReqCreatureOrGOCount'.$i];
                            echo "...Count".$i."<br/>";
                            echo "<input  type=\"text\" name=\"ReqCreatureOrGOCount$i\" value=\"".$value."\"><br/>";
                        }?>
                </td>
                <td valign="top">
                     <?php
                        for($i = 1;$i<=4;$i++){
                            $value = $result['ReqSpellCast'.$i];
                            echo "ReqSpellCast".$i."<br/>";
                            echo "<input  type=\"text\" name=\"ReqSpellCast$i\" value=\"".$value."\"><br/>";
                        }?>               
                </td>
                <td valign="top">
                    RepObjectiveFaction<br/>
                    <input  type="text" name="RepObjectiveFaction" value="<?php echo $result['RepObjectiveFaction'];?>"><br/>
                    RepObjectiveValue<br/>
                    <input  type="text" name="RepObjectiveValue" value="<?php echo $result['RepObjectiveValue'];?>">
                </td>
            </tr>
        </table>
</fieldset>
<p/>
<fieldset>
    <legend>Rewards for quest</legend>
        <table>
            <tr>
                <td>
                <?php
                for($i=1;$i<=6;$i++){
                    echo '<tr><td class="tablefont" >RewChoiceItemId'.$i.'<br><input class="inputbox"  type="text" name="RewChoiceItemId'.$i.'" value="'.$result['RewChoiceItemId'.$i].'"></td>';
                    echo '<td class="tablefont" >...Count'.$i.'<br><input class="inputbox"  type="text" name="RewChoiceItemCount'.$i.'" value="'.$result['RewChoiceItemCount'.$i].'"></td>';
                    if($i<=4){
                        echo '<td class="tablefont" >RewItemId'.$i.'<br><input class="inputbox"  type="text" name="RewItemId'.$i.'" value="'.$result['RewItemId'.$i].'"></td>';
                        echo '<td class="tablefont" >...Count'.$i.'<br><input class="inputbox"  type="text" name="RewItemCount'.$i.'" value="'.$result['RewItemCount'.$i].'"></td>';
                    }
                    if($i==5){echo '<td class="tablefont" >RewOrReqMoney<br><input class="inputbox"  type="text" name="RewOrReqMoney" value="'.$result['RewOrReqMoney'].'"></td>';
                            echo '<td class="tablefont" >RewSpell<br><input class="inputbox"  type="text" name="RewSpell" value="'.$result['RewSpell'].'"></td>';}
                    if($i==6){echo '<td class="tablefont" >RewMoneyMaxLevel<br><input class="inputbox"  type="text" name="RewMoneyMaxLevel" value="'.$result['RewMoneyMaxLevel'].'"></td>';
                            echo '<td class="tablefont" >RewSpellCast<br><input class="inputbox"  type="text" name="RewSpellCast" value="'.$result['RewSpellCast'].'"></td>';}
                    echo '</tr>';
                }
                for($i=1;$i<=5;$i++){
                    echo '<tr><td class="tablefont" >RewRepFaction'.$i.'<br><input class="inputbox"  type="text" name="RewRepFaction'.$i.'" value="'.$result['RewRepFaction'.$i].'"></td>';
                    echo '<td class="tablefont" >...Value'.$i.'<br><input class="inputbox"  type="text" name="RewRepValue'.$i.'" value="'.$result['RewRepValue'.$i].'"></td>';
                    echo '<td class="tablefont" >RewRepValueId'.$i.'<br><input class="inputbox"  type="text" name="RewRepValueId'.$i.'" value="'.$result['RewRepValueId'.$i].'"></td>';
                  
                }?>
         </tr> <tr>
                <?php
                   echo '<td class="tablefont" >RewMailTemplateId<br><input class="inputbox"  type="text" name="RewMailTemplateId" value="'.$result['RewMailTemplateId'].'"></td>';
                   echo '<td class="tablefont" >RewMailDelaySecs<br><input class="inputbox"  type="text" name="RewMailDelaySecs" value="'.$result['RewMailDelaySecs'].'"></td>';
                   echo '<td class="tablefont" >RewHonorAddition<br><input class="inputbox"  type="text" name="RewHonorAddition" value="'.$result['RewHonorAddition'].'"></td>';
                   echo '<td class="tablefont" >RewHonorMultiplier<br><input class="inputbox"  type="text" name="RewHonorMultiplier" value="'.$result['RewHonorMultiplier'].'"></td>';
                ?>
                </td>
            </tr>
        </table>
</fieldset>
<p/>
<fieldset>
    <legend>Emotions</legend>
        <table>
            <tr>
                <td class="tablefont" >PointMapId<br><input class="inputbox"  type="text" name="PointMapId" value="<?php echo $result['PointMapId'];?>"></td>
                <td class="tablefont" >PointX<br/><input class="inputbox"  type="text" name="PointX" value="<?php echo $result['PointX'];?>"></td>
                <td class="tablefont" >PointY<br/><input class="inputbox"  type="text" name="PointY" value="<?php echo $result['PointY'];?>"></td>
                <td class="tablefont" >PointOpt<br/><input class="inputbox"  type="text" name="PointOpt" value="<?php echo $result['PointOpt'];?>"></td>
                </tr>
                <?php
                    for($i=1;$i<=4;$i++){?>
                        <tr><td class="tablefont" >DetailsEmote<?php echo $i;?><br>
                            <input class="inputbox"  type="text" name="DetailsEmote<?php echo $i;?>" value="<?php echo $result['DetailsEmote'.$i];?>"></td>
                        <td class="tablefont" >DetailsEmoteDelay<?php echo $i;?><br/>
                            <input class="inputbox"  type="text" name="DetailsEmoteDelay<?php echo $i;?>" value="<?php echo $result['DetailsEmoteDelay'.$i];?>"></td>
                        <td class="tablefont" >OfferRewardEmote<?php echo $i;?><br/>
                            <input class="inputbox"  type="text" name="OfferRewardEmote<?php echo $i;?>" value="<?php echo $result['OfferRewardEmote'.$i];?>"></td>
                        <td class="tablefont" >OfferRewardEmoteDelay<?php echo $i;?><br/>
                            <input class="inputbox"  type="text" name="OfferRewardEmoteDelay<?php echo $i;?>" value="<?php echo $result['OfferRewardEmoteDelay'.$i];?>"></td>
                </tr>           
                <?php } ?>
            <tr>
                <td class="tablefont" >CompleteEmote<br/><input class="inputbox"  type="text" name="CompleteEmote" value="<?php echo $result['CompleteEmote'];?>"></td>
                <td class="tablefont" >IncompleteEmote<br/><input class="inputbox"  type="text" name="IncompleteEmote" value="<?php echo $result['IncompleteEmote'];?>"></td>
                <td class="tablefont" >StartScript<br/><input class="inputbox"  type="text" name="StartScript" value="<?php echo $result['StartScript'];?>"></td>
                <td class="tablefont" >CompleteScript<br/><input class="inputbox"  type="text" name="CompleteScript" value="<?php echo $result['CompleteScript'];?>"></td>
            </tr>
        </table>
</fieldset>

<p/>
<fieldset>
    <legend>Other</legend>
        <table>
            <tr>
                <td class="tablefont" >AreaTrigger<br/><input class="inputbox"  type="text" name="AreaTrigger" value="NOT USED"></td>
                <td class="tablefont" >SpecialFlags<br/><input class="inputbox"  type="text" name="SpecialFlags" value="<?php echo $result['SpecialFlags'];?>"></td>
                <td class="tablefont" >SuggestedPlayers<br/><input class="inputbox"  type="text" name="SuggestedPlayers" value="<?php echo $result['SuggestedPlayers'];?>"></td>
            </tr>
            <tr><td class="tablefont" >CharTitleId<br/><input class="inputbox"  type="text" name="CharTitleId" value="<?php echo $result['CharTitleId'];?>"></td>
                <td class="tablefont" >PlayersSlain<br/><input class="inputbox"  type="text" name="PlayersSlain" value="<?php echo $result['PlayersSlain'];?>"></td>
                <td class="tablefont" >BonusTalents<br/><input class="inputbox"  type="text" name="BonusTalents" value="<?php echo $result['BonusTalents'];?>"></td>
                <td class="tablefont" >Method<br/><input class="inputbox"  type="text" name="Method" value="<?php echo $result['Method'];?>"></td>
            </tr>
        </table>
</fieldset>
