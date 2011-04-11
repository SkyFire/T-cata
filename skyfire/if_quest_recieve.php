<?php

?>
<table>
    <tr>
        <td>           
            <fieldset>
                <legend>Keys</legend>
                    <table>
                        <tr>
                            <td>entry<br><input type="text" name="entry" value="<?php echo $result['entry'];?>"></td>
                            <td>PrevQuestId<br><input type="text" name="PrevQuestId" value="<?php echo $result['PrevQuestId'];?>"></td>
                        </tr><tr>
                            <td>ExclusiveGroup<br><input type="text" name="ExclusiveGroup" value="<?php echo $result['ExclusiveGroup'];?>"></td>
                            <td>NextQuestId<br><input type="text" name="NextQuestId" value="<?php echo $result['NextQuestId'];?>"></td>
                        </tr><tr>
                            <td>NextQuestInChain<br><input type="text" name="NextQuestInChain" value="<?php echo $result['NextQuestInChain'];?>"></td>
                            <td>RewXPId<br><input type="text" name="RewXPId" value="<?php echo $result['RewXPId'];?>"></td>
                        </tr>
                    </table>
            </fieldset>
        </td>
        <td>
            <fieldset>
                <legend>Requirements to begin</legend>
                    <table>
                        <tr>
                            <td>RequiredSkill<br><input type="text" name="XXX" value="NOT USED"></td>
                            <td>RequiredSkillValue<br><input type="text" name="RequiredSkillValue" value="<?php echo $result['RequiredSkillValue'];?>"></td>
                        </tr><tr>
                            <td>RequiredMinRepFaction<br><input type="text" name="RequiredMinRepFaction" value="<?php echo $result['RequiredMinRepFaction'];?>"></td>
                            <td>...Value<br><input type="text" name="RequiredMinRepValue" value="<?php echo $result['RequiredMinRepValue'];?>"></td>
                        </tr><tr>
                            <td>RequiredMaxRepFaction<br><input type="text" name="RequiredMaxRepFaction" value="<?php echo $result['RequiredMaxRepFaction'];?>"></td>
                            <td>RequiredMaxRepValue<br><input type="text" name="RequiredMaxRepValue" value="<?php echo $result['RequiredMaxRepValue'];?>"></td>
                        </tr>
                    </table>
            </fieldset>      
        </td>
    </tr><tr>
        <td valign="top">
            <fieldset>
                <legend>Zone,Sort,Level</legend>
                    <table>
                        <tr>
                            <td>RequiredRaces<br/><input type="text" value="<?php echo $result['RequiredRaces'];?>" name="RequiredRaces" ></td>
                            <td>SkillOrClassMask<br/><input type="text" value="<?php echo $result['SkillOrClassMask'];?>" name="SkillOrClassMask" ></td>
                        </tr><tr>
                            <td>MinLevl<br/><input type="text" value="<?php echo $result['MinLevel'];?>" name="MinLevel"></td>
                            <td>QuestLevel<br/><input type="text" value="<?php echo $result['QuestLevel'];?>" name="QuestLevel"></td>
                        </tr><tr>
                            <td>SpecialFlags<br/><input type="text" value="<?php echo $result['SpecialFlags'];?>" name="SpecialFlags" ></td>
                            <td>CharTitleId<br/><input type="text" value="<?php echo $result['CharTitleId'];?>" name="CharTitleId"></td>
                        </tr>
                    </table>
            </fieldset>       
        </td>
        <td>
            <table><tr>
                <td>
                    <fieldset>
                        <legend>Flags</legend>
                            <table class="resultsborder" >
                                <tr>
                                    <td class="tablefont" >Type<br/>
                                        <input class="inputbox"  type="text" value="<?php echo $result['Type'];?>" name="Type" >
                                    </td>
                                </tr><tr>
                                    <td class="tablefont" >QuestFlags<br/>
                                        <input class="inputbox"  type="text" value="<?php echo $result['QuestFlags'];?>" name="QuestFlags" >
                                    </td>
                                </tr><tr>
                                    <td class="tablefont" >LimitTime<br/>
                                        <input class="inputbox"  type="text" value="<?php echo $result['LimitTime'];?>" name="LimitTime" >
                                    </td>
                                </tr>
                            </table>
                    </fieldset>               
                </td>
                <td>
                    <fieldset>
                        <legend>Src For Quest</legend>
                            <table class="resultsborder" >
                                <tr>
                                    <td class="tablefont" >SrcItemId<br/>
                                        <input class="inputbox"  type="text" value="<?php echo $result['SrcItemId'];?>" name="SrcItemId" >
                                    </td>
                                </tr><tr>
                                    <td class="tablefont" >srcItemCount<br/>
                                        <input class="inputbox"  type="text" value="<?php echo $result['SrcItemCount'];?>" name="SrcItemCount" >
                                    </td>
                                </tr><tr>
                                    <td class="tablefont" >SrcSpell<br/>
                                        <input class="inputbox"  type="text" value="<?php echo $result['SrcSpell'];?>" name="SrcSpell">
                                    </td>
                                </tr>
                            </table>
                    </fieldset>
                </td>
            </tr>
        </table>
            </tr><tr>
            
                <td valign="top" align="left" colspan="3">
                    <fieldset>
                        <legend>Description of Quest</legend>
                            <table>
                                <tr>
                                    <td >
                                        Title<br/>
                                        <input type="text" name="Title" value="<?php echo $result['Title'];?>" size="100">
                                    </td>
                                </tr><tr>
                                    <td>
                                        <table>
                                            <tr>
                                                <td valign="top">Details<br><textarea rows="7" cols="30" name="Details"><?php echo $result['Details'];?></textarea></td>
                                                <td valign="top">Objective<br/><textarea rows="7" cols="30" name="Objectives"><?php echo $result['Objectives'];?></textarea></td>
                                                <td valign="top" rowspan="2">OfferRewardText<br><textarea rows="4" cols="30" name="OfferRewardText"><?php echo $result['OfferRewardText'];?></textarea><br>
                                                    Completed Text<br><input size="35" type="text" name="CompletedText"><?php echo $result['CompletedText'];?></textarea>
                                                    ObjectiveText1<br/>
                                                    <input class="inputbox"  type="text" name="ObjectiveText1" value="<?php echo $result['ObjectiveText1'];?>"><br/>
                                                    ObjectiveText2<br/>
                                                    <input class="inputbox"  type="text" name="ObjectiveText2" value="<?php echo $result['ObjectiveText2'];?>"><br/>
                                                    ObjectiveText3<br/>
                                                    <input class="inputbox"  type="text" name="ObjectiveText3" value="<?php echo $result['ObjectiveText3'];?>"><br/>
                                                    ObjectiveText4<br/>
                                                    <input class="inputbox"  type="text" name="ObjectiveText4" value="<?php echo $result['ObjectiveText4'];?>"><br/>
                                                </td>
                                            </tr><tr>
                                                <td valign="top">End Text<br><textarea rows="4" cols="30" name="EndText"><?php echo $result['EndText'];?></textarea></td>
                                                <td valign="top">RequestItemsText<br><textarea rows="4" cols="30" name="RequestItemsText"><?php echo $result['RequestItemsText'];?></textarea></td>
                                                
                                               
                                        </table>
                                    </td>
                                </tr>
                            </table>
                    </fieldset>
                </td>
            </tr>
            </table>
        </td>
    </tr>
</table>
