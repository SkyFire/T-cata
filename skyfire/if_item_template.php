<?php
    include('include/arrays.php');
?>
<form method="post">
    <fieldset>
        <legend>Basic</legend>
            <table>
                <tr>
                    <td width="100">entry<br><input type="text" name="entry" value="<?php echo $result['entry'];?>"></td>
                    <td>class<br><input type="text" name="class" value="<?php echo $result['class'];?>"></td>
                    <td>subclass<br><input type="text" name="subclass" value="<?php echo $result['subclass'];?>"></td>
                    <td>name<br>
                        <input type="text" name="name" value="<?php echo $result['name'];?>"></td>
                    <td>displayid<br><input type="text" name="displayid" value="<?php echo $result['displayid'];?>"></td>
                </tr><tr>
                    <td colspan="2">description<br><input type="text" name="description" value="<?php echo $result['description'];?>" size="45"></td>
                    <td>Quality<br>
                        <select                                       name="Quality">
                        <?php
                            foreach($item_quality as $qualityName => $value){
                                echo "<option value=\"$value\"";
                                if($value == $result['Quality']){echo " selected=\"selected\" ";}
                                echo ">$qualityName</option>";
                            }
                        ?>
                
                    </select>
                    
                     
                     
                     
                     <td>FlagsExtra<br/><input type="text" name="FlagsExtra" value="<?php echo $result['FlagsExtra'];?>"></td>
                </tr><tr>
                     <td>BuyCount<br/><input type="text" name="BuyCount" value="<?php echo $result['BuyCount'];?>"></td>
                     <td>BuyPrice<br/><input type="text" name="BuyPrice" value="<?php echo $result['BuyPrice'];?>"></td>
                     <td>SellPrice<br/><input type="text" name="SellPrice" value="<?php echo $result['SellPrice'];?>"></td>

                     <td>InventoryType<br/>
                        <select                                            name="InventoryType">
                        <option value="" selected="selected"></option>
                        <?php
                            foreach($inventory_type as $inventoryName => $value){
                                echo "<option value=\"$value\"";
                                if($value == $result['InventoryType']){echo " selected=\"selected\" ";}
                                echo ">$inventoryName</option>";
                            }
                        ?>
                        </select>
                    </td>
                </tr><tr>
                        
                     <td rowspan="2" colspan="2">Flags ( <?php echo $result['Flags'];?> )<br/>
                        <input type="text" name="Flags" value="<?php echo $result['Flags'];?>"><br/>
                        <select  multiple="multiple" size="5">
                        <?php
                            $tmpFlags = $result['Flags'];
                        
                            foreach($item_flags as $flagname => $value){
                        
                                echo "<option value=\"$value\"";
                        
                                if($value == $tmpFlags){
                                    echo " selected=\"selected\" ";
                                    $tmpFlags -= $value;
                                    }
                        
                                echo ">$flagname</option>";
                            }
                        ?>
                        </select>
                     </td> 
                     
                     <td>Stackable<br><input type="text" name="stackable" value="<?php echo $result['stackable'];?>"></td>
                     <td>ContainerSlots<br><input type="text" name="ContainerSlots" value="<?php echo $result['ContainerSlots'];?>"></td>
                     <td>MaxCount<br><input type="text" name="maxcount" value="<?php echo $result['maxcount'];?>"></td>                                             
                </tr>
            </table>
    </fieldset>
    
    <P>
    <fieldset>
        <legend>Requirements</legend>
            <table>
                <tr>
                    <td rowspan="2" >AllowableRace<br/><?php echo $result['AllowableRace'];?>
                        <!-- <input type="text" name="AllowableRace" value="<?php //echo $result['AllowableRace'];?>"><br/>-->
                        
                        <select multiple="multiple" size="5" name="AllowableRace[]">
                        <?php
                            $tmpFlags = $result['AllowableRace'];
                        
                            foreach($races as $racename => $value){
                        
                                echo "<option value=\"$value\"";
                        
                                if($value >= $tmpFlags || $result['AllowableRace'] == -1){
                                    echo " selected=\"selected\" ";
                                    $tmpFlags -= $value;
                                    }
                        
                                echo ">$racename</option>";
                            }
                        ?>
                        </select>
                     </td>
                    
                    <td rowspan="2" >AllowableClass<br/>
                        <input type="text" name="AllowableClass" value="<?php echo $result['AllowableClass'];?>"><br/>
                        
                        <select multiple="multiple" size="5">
                        <?php
                            $tmpFlags = $result['AllowableClass'];
                        
                            foreach($classes as $classname => $value){
                        
                                echo "<option value=\"$value\"";
                        
                                if($value == $tmpFlags || $result['AllowableClass'] == -1){
                                    echo " selected=\"selected\" ";
                                    $tmpFlags -= $value;
                                    }
                        
                                echo ">$classname</option>";
                            }
                        ?>
                        </select>
                    </td>
                    <td colspan="2">RequiredReputationFaction<br><input type="text" name="RequiredReputationFaction" value="<?php echo $result['RequiredReputationFaction'];?>"></td>
                    <td colspan="2">RequiredReputationRank<br><input type="text" name="RequiredReputationRank" value="<?php echo $result['RequiredReputationRank'];?>"></td>
                    <td colspan="2">requiredspell<br><input type="text" name="requiredspell" value="<?php echo $result['requiredspell'];?>"></td>
                    
                </tr><tr>
                    <td colspan="2">RequiredDisenchantSkill<br><input type="text" name="RequiredDisenchantSkill" value="<?php echo $result['RequiredDisenchantSkill'];?>"></td>
                    <td colspan="2">RequiredCityRank<br><input type="text" name="RequiredCityRank" value="<?php echo $result['RequiredCityRank'];?>"></td>
                    <td colspan="2">requiredhonorrank<br><input type="text" name="requiredhonorrank" value="<?php echo $result['requiredhonorrank'];?>"></td>
                </tr><tr>
                    <td colspan="2">ItemLevel<br><input type="text" name="ItemLevel" value="<?php echo $result['ItemLevel'];?>"></td>
                    <td colspan="2">RequiredLevel<br><input type="text" name="RequiredLevel" value="<?php echo $result['RequiredLevel'];?>"></td>
                    <td colspan="2">RequiredSkill<br><input type="text" name="RequiredSkill" value="<?php echo $result['RequiredSkill'];?>"></td>
                    <td colspan="2">RequiredSkillRank<br><input type="text" name="RequiredSkillRank" value="<?php echo $result['RequiredSkillRank'];?>"></td>
                    
                </tr>
            </table>
    </fieldset>
    
    <p/>
    
    <fieldset>
        <legend>Weapons</legend>
            <table>
                <tr>
                    <td>itemset<br><input type="text" name="itemset" value="<?php echo $result['itemset'];?>"></td>
                    <td>bonding<br><input type="text" name="bonding" value="<?php echo $result['bonding'];?>"></td>
                    <td>ArmorDmgMod<br><input type="text" name="ArmorDamageModifier" value="<?php echo $result['ArmorDamageModifier'];?>"></td>
                    <td>block<br><input type="text" name="block" value="<?php echo $result['block'];?>"></td>
                </tr><tr>
                    <td>delay<br><input type="text" name="delay" value="<?php echo $result['delay'];?>"></td>
                    <td>RangedModRang<br><input type="text" name="RangedModRange" value="<?php echo $result['RangedModRange'];?>"></td>
                    <td>damageType<br><input type="text" name="damageType" value="<?php echo $result['damageType'];?>"></td>
                    <td>MaxDurability<br><input type="text" name="MaxDurability" value="<?php echo $result['MaxDurability'];?>"></td>
                    </td>
                </tr>
            </table>
    </fieldset>
    
    <p/>
    
    <fieldset>
        <legend>spell</legend>
            <table>
                <tr>
                    <td>spellid</td><td>trigger</td><td>chrgs</td><td>ppmRate</td>
                    <td>cd</td><td>cat</td><td>catcd</td>
                </tr>
                    <?php
                        
                        for($i = 1; $i <= 5; $i++){
                            
                            echo "<tr>";
                            echo "  <td><input type=\"text\" name=\"spellid_$i\" value=\"".$result['spellid_'.$i]                               ."\" size=\"10\"></td>
                                    <td><input type=\"text\" name=\"spelltrigger_$i\" value=\"".$result['spelltrigger_'.$i]                     ."\" size=\"10\"></td>
                                    <td><input type=\"text\" name=\"spellcharges_$i\" value=\"".$result['spellcharges_'.$i]                     ."\" size=\"10\"></td>
                                    <td><input type=\"text\" name=\"spellppmRate_$i\" value=\"".$result['spellppmRate_'.$i]                     ."\" size=\"10\"></td>
                                    <td><input type=\"text\" name=\"spellcooldown_$i\" value=\"".$result['spellcooldown_'.$i]                   ."\" size=\"10\"></td>
                                    <td><input type=\"text\" name=\"spellcategory_$i\" value=\"".$result['spellcategory_'.$i]                   ."\" size=\"10\"></td>
                                    <td><input type=\"text\" name=\"spellcategorycooldown_$i\" value=\"".$result['spellcategorycooldown_'.$i]   ."\" size=\"10\"></td>";
                            echo "</tr>";
                        }
                    ?>
            </table>
    </fieldset>
    <p>
    <table border="0" cellpadding="0" cellspacing="0">
        <tr>
            <!-- ITEM RESISTANCE NOT AVAILABLE ATM
                    WAITING FOR DEVS
            
            <td>
                <fieldset>
                    <legend>resistance</legend>
                        <table>
                            <tr>
                                <td>holy_res<br><input type="text" name="holy_res" value="<?php //echo $result['holy_res'];?>"></td>
                                <td>frost_res<br><input type="text" name="frost_res" value="<?php //echo $result['frost_res'];?>"></td>
                            </tr><tr>
                                <td>fire_res<br><input type="text" name="fire_res" value="<?php //echo $result['fire_res'];?>"></td>
                                <td>shadow_res<br><input type="text" name="shadow_res" value="<?php //echo $result['shadow_res'];?>"></td>
                            </tr><tr>
                                <td>nat_res<br><input type="text" name="nat_res" value="<?php //echo $result['nat_res'];?>"></td>
                                <td>arc_res<br><input type="text" name="arc_res" value="<?php //echo $result['arc_res'];?>"></td>
                            </tr>
                        </table>
                </fieldset>
            </td>
            -->
            <td><!-- socket  -->
                <fieldset>
                    <legend>socket</legend>
                        <table>
                            <tr>
                                <td>socketColor</td><td>socketContent</td>
                            </tr>
                                <?php
                                    for($i = 1; $i <= 3; $i++){
                                        echo "<tr>";
                                        echo "    <td><input type=\"text\" name=\"socketColor_$i\" value=\"".$result['socketColor_'.$i]."\"></td>";
                                        echo "    <td><input type=\"text\" name=\"socketContent_$i\" value=\"".$result['socketContent_'.$i]."\"></td>";
                                        echo "</tr>";
                                    }
                                ?>
                        </table>
                </fieldset>
            </td>
            
            <td valign="top"> <!-- socket bonus -->
                <fieldset>
                    <legend>socket bonus</legend>
                        <table>
                            <tr>
                                <td>socketBonus<br><input type="text" name="socketBonus" value="<?php echo $result['socketBonus'];?>"></td>
                            </tr><tr>
                                <td>gemProperties<br><input type="text" name="GemProperties" value="<?php echo $result['GemProperties'];?>"></td>
                            </tr>
                        </table>
                </fieldset>
            </td>
            
        </tr><tr>
        
            <td><!-- stats -->
                <fieldset>
                    <legend>stats</legend>
                        <table>
                            <tr>
                                <td>stat_type</td><td>stat_value</td>
                            </tr>
                                <?php
                                    for($i=1; $i<=10; $i++){?>
                                        <tr>
                                            <td><input type="text" name="stat_type<?php echo $i;?>" value="<?php echo $result['stat_type'.$i];?>"></td>
                                            <td><input type="text" name="stat_value<?php echo $i;?>" value="<?php echo $result['stat_value'.$i];?>"></td>
                                        </tr>   
                                    <?php } ?>
                            <tr>
                                <td colspan="2">ScalingStatDistrobution<br><input type="text" name="ScalingStatDistribution" value="<?php echo $result['ScalingStatDistribution'];?>"></td>
                            </tr><tr>
                                <td colspan="2">ScalingStatValue<br><input type="text" name="ScalingStatValue" value="<?php echo $result['ScalingStatValue'];?>"></td>
                        </table>
                </fieldset>
            </td>
            
            <td valign="top"><!-- other -->
                <fieldset>
                    <legend>other</legend>
                        <table>
                            <tr>
                                <td>Material<br/><input type="text" name="Material" value="<?php echo $result['Material'];?>"></td>
                                <td>PageText<br/><input type="text" name="PageText" value="<?php echo $result['PageText'];?>"></td>
                                <td>Duration<br/><input type="text" name="Duration" value="<?php echo $result['Duration'];?>"></td>
                            </tr><tr>
                                <td>area<br/><input type="text" name="area" value="<?php echo $result['area'];?>"></td>
                                <td>startquest<br/><input type="text" name="startquest" value="<?php echo $result['startquest'];?>"></td>
                                <td>RandomProperty<br/><input type="text" name="RandomProperty" value="<?php echo $result['RandomProperty'];?>"></td>
                            </tr><tr>
                                <td>FoodType<br/><input type="text" name="FoodType" value="<?php echo $result['FoodType'];?>"></td>
                                
                                
                                <td>sheath<br/>
                                    
                                    <select name="sheath">
                                    <?php
                                        foreach($sheath as $name => $value){ ?>
                                            <option value="<?php echo $value."\"";
                                            
                                            if($value == $result['sheath']){
                                                echo " selected=\"selected\"";
                                            }
                                            echo ">".$name;
                                        }
                                    ?>
                                    
                                    </select>
                                </td>
                                
                                <td>LanguageID<br/><input type="text" name="LanguageID" value="<?php echo $result['LanguageID'];?>"></td>
                                
                            </tr><tr>
                                
                                <td colspan="2">BagFamily<br/>
                                    
                                    <select name="BagFamily">
                                    <?php
                                        foreach($bagfamily as $name => $value){ ?>
                                            <option value="<?php echo $value."\"";
                                            
                                            if($value == $result['BagFamily']){
                                                echo " selected=\"selected\"";
                                            }
                                            echo ">".$name;
                                        }?>
                                    </select>
                                </td>
                                
                                
                            </tr><tr>
                                
                                <td>Map<br/><input type="text" name="Map" value="<?php echo $result['Map'];?>"></td>
                                <td>Lockid<br/><input type="text" name="lockid" value="<?php echo $result['lockid'];?>"></td>
                                <td>RandomSuffix<br/><input type="text" name="RandomSuffix" value="<?php echo $result['RandomSuffix'];?>"></td>
                            </tr><tr>
                                
                                <td>minMoneyLoot<br/><input type="text" name="minMoneyLoot" value="<?php echo $result['minMoneyLoot'];?>"></td>
                                <td>maxMoneyLoot<br/><input type="text" name="maxMoneyLoot" value="<?php echo $result['maxMoneyLoot'];?>"></td>
                                <td>DisenchantID<br/><input type="text" name="DisenchantID" value="<?php echo $result['DisenchantID'];?>"></td>
                            </tr><tr>
                                
                                <td>ScriptName<br/><input type="text" name="ScriptName" value="<?php echo $result['ScriptName'];?>"></td>
                                <td>TotemCategory<br/><input type="text" name="TotemCategory" value="<?php echo $result['TotemCategory'];?>"></td>
                                
                                <td>material<br/>
                                    
                                    <select name="PageMaterial">
                                    <?php
                                        foreach($pagematerial as $name => $value){ ?>
                                            <option value="<?php echo $value."\"";
                                            
                                            if($value == $result['PageMaterial']){
                                                echo " selected=\"selected\"";
                                            }
                                            echo ">".$name;
                                        }?>
                                    </select>
                                </td>
                                
                                
                            </tr><tr>
                                
                                <td>FlagsExtra<br/><input type="text" name="FlagsExtra" value="<?php echo $result['FlagsExtra'];?>"></td>
                                <td>ItemLimitCat<br/><input type="text" name="ItemLimitCategory" value="<?php echo $result['ItemLimitCategory'];?>"></td>
                                <td>HolidayId<br/><input type="text" name="HolidayId" value="<?php echo $result['HolidayId'];?>"></td>
                            </tr>
                                
                            
                        </table>
                </fieldset>
            </td>
            
        </tr>
    </table>
    <p/>
    <div align="right"><input type="submit" value="Update" name="submit" class="inputbtn"></div>
    
        
</form>