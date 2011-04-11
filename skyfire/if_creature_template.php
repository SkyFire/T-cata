<?php
    $result = creature($_REQUEST['npc']);
    
?>
 <form method="post">
<fieldset>
    <legend>Creature I</legend>
        
            <table>
                <tr>
                    <td >Entry<sup>1</sup><br><input type="text" name="entry" value="<?php echo $result['entry'];?>"></td>
                    <td >difficulty_entry_1<br><input type="text" name="difficulty_entry_1" value="<?php echo $result['difficulty_entry_1'];?>"></td>
                    <td >difficulty_entry_2<br><input type="text" name="difficulty_entry_2" value="<?php echo $result['difficulty_entry_2'];?>"></td>
                    <td >difficulty_entry_3<br><input type="text" name="difficulty_entry_3" value="<?php echo $result['difficulty_entry_3'];?>"></td>
                </tr><tr>
                    <td >KillCredit1<br><input type="text" name="KillCredit1" value="<?php echo $result['KillCredit1'];?>"></td>
                    <td >KillCredit2<br><input type="text" name="KillCredit2" value="<?php echo $result['KillCredit2'];?>"></td>
                    <td  colspan="2">Name<br><input   size="30" type="text" name="name" value="<?php echo $result['name'];?>"></td>
                </tr><tr>
                    <td >subname<br><input type="text" name="subname" value="<?php echo $result['subname'];?>"></td>
                    <td >exp<br><input type="text" name="exp" value="<?php echo $result['exp'];?>"></td>
                    <td  colspan="2">IconName<br><input type="text" name="IconName" value="<?php echo $result['IconName'];?>"></td>
                </tr><tr>
                    <?php for($i=1;$i<=4;$i++){
                        echo '
                        <td >
                        modelid'.$i.'<br>
                        <input type="text"
                        name="modelid'.$i.'"
                        value="'.$result['modelid'.$i].'"</td>';
                    }?>
                </tr><tr>
                    <td >mingold<br><input type="text" name="mingold" value="<?php echo $result['mingold'];?>"></td>
                    <td >maxgold<br><input type="text" name="maxgold" value="<?php echo $result['maxgold'];?>"></td>
                    <td >minlevel<br><input type="text" name="minlevel" value="<?php echo $result['minlevel'];?>"></td>
                    <td >maxlevel<br><input type="text" name="maxlevel" value="<?php echo $result['maxlevel'];?>"></td>
                </tr><tr>
                    <td >Mana_mod<br><input type="text" name="Mana_mod" value="<?php echo $result['Mana_mod'];?>"></td>
                    <td >Health_mod<br><input type="text" name="Health_mod" value="<?php echo $result['Health_mod'];?>"></td>
                </tr>
            </table>
    </fieldset>
<br/>
<table>
    <tr>
        <td><!-- loot -->
            <fieldset>
                <legend>Loot</legend>
                        <table ><tr>
                            <td >lootid<br><input  type="text" name="lootid" value="<?php echo $result['lootid'];?>"></td></tr><tr>
                            <td >pickpocketloot<br><input  type="text" name="pickpocketloot" value="<?php echo $result['pickpocketloot'];?>"></td></tr><tr>
                            <td >skinloot<br><input  type="text" name="skinloot" value="<?php echo $result['skinloot'];?>"></td></tr><tr>
                        </tr></table>
            </fieldset>
        </td>
        
        <td><!-- resistance -->
            <fieldset>
                <legend>Resistance</legend>
                        <table ><tr>
                            <?php for($i=1;$i<=3;$i++){
                                echo '
                                <td >resistance'.$i.'<br><input  type="text" name="resistance'.$i.'" value="'.$result['resistance'.$i].'"></td>
                                <td >resistance'.($i+3).'<br><input  type="text" name="resistance'.($i+3).'" value="'.$result['resistance'.($i+3)].'"></td>
                        </tr><tr>';
                            }?>
                        </tr></table>

            </fieldset>
        </td>
        <td valign="top"><!-- Racial leader -->
            <fieldset>
                <legend>Misc</legend>
                    <input type="checkbox" name="RacialLeader" value="0">RacialLeader<p>
                        mechanic_immune_mask<br>
                    <input type="text" name="mechanic_immune_mask" value="<?php echo $result['mechanic_immune_mask'];?>"><br/>
                        flags_extra<br/>
                    <input type="text" name="flags_extra" value="<?php echo $result['flags_extra'];?>">
            </fieldset>
        </td>
    </tr>
</table>
<br/>
<fieldset>
    <legend>QuestItems</legend>
        <table>
            <tr>
            <?php for($i=1;$i<=3;$i++){
                echo '
                <td >questItem'.$i.'<br><input type="text" name="questItem'.$i.'" value="'.$result['questItem'.$i].'"></td>
                <td >questItem'.($i+3).'<br><input type="text" name="questItem'.($i+3).'" value="'.$result['questItem'.($i+3)].'"></td>
                </tr><tr>';
            }?>
            </tr>
        </table>
</fieldset>

<p/>
<fieldset>
    <legend>Creature II</legend>
        <table class="resultsborder">
            <tr>
                    <td >mindmg<br><input type="text" name="mindmg" value="<?php echo $result['mindmg'];?>"></td>
                    <td >maxdmg<br><input type="text" name="maxdmg" value="<?php echo $result['maxdmg'];?>"></td>
                    <td >attackpower<br><input type="text" name="attackpower" value="<?php echo $result['attackpower'];?>"></td>
                    <td >dmg_multiplier<br><input type="text" name="dmg_multiplier" value="<?php echo $result['dmg_multiplier'];?>"></td>
                    <td >baseattacktime<br><input type="text" name="baseattacktime" value="<?php echo $result['baseattacktime'];?>"></td>
                </tr><tr>
                     <td >minrangedmg<br><input type="text" name="minrangedmg" value="<?php echo $result['minrangedmg'];?>"></td>
                    <td >maxrangedmg<br><input type="text" name="maxrangedmg" value="<?php echo $result['maxrangedmg'];?>"></td>
                    <td >dmgschool<br><input type="text" name="dmgschool" value="<?php echo $result['dmgschool'];?>"></td>
                    <td >rangeattacktime<br><input type="text" name="rangeattacktime" value="<?php echo $result['rangeattacktime'];?>"></td>
                    <td >rangedattackpower<br><input type="text" name="rangedattackpower" value="<?php echo $result['rangedattackpower'];?>"></td>
                </tr><tr>
                     <td >Health_mod<br><input type="text" name="Health_mod" value="<?php echo $result['Health_mod'];?>"></td>
                    <td >unit_class<br><input type="text" name="unit_class" value="<?php echo $result['unit_class'];?>"></td>
                    <td >equipment_id<br><input type="text" name="equipment_id" value="<?php echo $result['equipment_id'];?>"></td>
                    <td >trainer_id<br><input type="text" name="trainer_id" value="NOT USED"></td>
                    <td >vendor_id<br><input type="text" name="vendor_id" value="NOT USED"></td>
                </tr><tr>
                     <td >rank<br><input type="text" name="rank" value="<?php echo $result['rank'];?>"></td>
                    <td >family<br><input type="text" name="family" value="<?php echo $result['family'];?>"></td>
                    <td >faction_A<br><input type="text" name="faction_A" value="<?php echo $result['faction_A'];?>"></td>
                    <td >faction_H<br><input type="text" name="faction_H" value="<?php echo $result['faction_H'];?>"></td>
                    <td >type<br><input type="text" name="type" value="<?php echo $result['type'];?>"></td>
                 </tr><tr>
                     <td >npcflag<br><input type="text" name="npcflag" value="<?php echo $result['npcflag'];?>"></td>
                    <td >unit_flags<br><input type="text" name="unit_flags" value="<?php echo $result['unit_flags'];?>"></td>
                    <td >type_flags<br><input type="text" name="type_flags" value="<?php echo $result['type_flags'];?>"></td>
                    <td >dynamicflags<br><input type="text" name="dynamicflags" value="<?php echo $result['dynamicflags'];?>"></td>
            </tr>
        </table>
</fieldset>

<p>
    
<table>
    <tr>
        <td valign="top"><!-- TRAINER / SPELLS-->
            <fieldset>
                <legend>Trainer</legend>
                    <table class="resultsborder"><tr>
                    <td class="tablefont" >trainer_type<br><input class="cinputbox"  type="text" name="trainer_type" value="<?php echo $result['trainer_type'];?>"></td>
                    <td class="tablefont" >trainer_spell<br><input class="cinputbox"  type="text" name="trainer_spell" value="<?php echo $result['trainer_spell'];?>"></td>
                </tr><tr>
                    <td class="tablefont" >trainer_race<br><input class="cinputbox"  type="text" name="trainer_race" value="<?php echo $result['trainer_race'];?>"></td>
                    <td class="tablefont" >trainer_class<br><input class="cinputbox"  type="text" name="trainer_class" value="<?php echo $result['trainer_class'];?>"></td>
                </tr></table>
            </fieldset>

            <br/>
            
            <fieldset>
                <legend>Spells</legend>
                    <table class="resultsborder"><tr>
                    <?php for($i=1;$i<=2;$i++){
                        echo '
                            <td class="tablefont" >spell'.$i.'<br><input class="cinputbox"  type="text" name="spell'.$i.'" value="'.$result['spell'.$i].'"></td>
                            <td class="tablefont" >spell'.($i+2).'<br><input class="cinputbox"  type="text" name="spell'.($i+2).'" value="'.$result['spell'.($i+3)].'"></td>
                            </tr><tr>';
                    }?>
                </tr></table>
            </fieldset>
        </td>
        
        <td valign="top"><!-- armor /unk -->
            <fieldset>
                <legend>Armor</legend>
                    <table class="resultsborder"><tr>
                    <td class="tablefont"  colspan="2">Armor_mod<br><input class="cinputbox"  type="text" name="Armor_mod" value="<?php echo $result['Armor_mod'];?>"></td></tr><tr>
                    <td class="tablefont" >speed_walk<br><input class="cinputbox"  size="5" type="text" name="speed_walk" value="<?php echo $result['speed_walk'];?>"></td>
                    <td class="tablefont" >speed_run<br><input class="cinputbox"  size="5" type="text" name="speed_run" value="<?php echo $result['speed_run'];?>"></td></tr><tr>
                    <td class="tablefont"  colspan="2">scale<br><input class="cinputbox"  type="text" name="scale" value="<?php echo $result['scale'];?>"></td></tr><tr>
                </tr></table>

            </fieldset>
            <br/>
            
            <fieldset>
                <legend>Misc</legend>
                    <table class="resultsborder"><tr>
                    <td class="tablefont" >VehicleId<br><input class="cinputbox"  type="text" name="VehicleId" value="<?php echo $result['VehicleId'];?>"></td></tr><tr>
                    <td class="tablefont" >PetSpellDataId<br><input class="cinputbox"  size="5" type="text" name="PetSpellDataId" value="<?php echo $result['PetSpellDataId'];?>"></td>
                </tr></table>

            </fieldset>
        </td>
        
        <td valign="top"><!-- behavior -->
            <fieldset>
                <legend>Behavior</legend>
                     <table class="resultsborder"><tr>
                    <td class="tablefont" >AIName<br><input class="cinputbox"  type="text" name="AIName" value="<?php echo $result['AIName'];?>"></td></tr><tr>
                    <td class="tablefont" >MovementType<br><input class="cinputbox"  type="text" name="MovementType" value="<?php echo $result['MovementType'];?>"></td></tr><tr>
                    <td class="tablefont" >movementId<br><input class="cinputbox"  type="text" name="movementId" value="<?php echo $result['movementId'];?>"></td></tr><tr>
                    <td class="tablefont" >InhabitType<br><input class="cinputbox"  type="text" name="InhabitType" value="<?php echo $result['InhabitType'];?>"></td></tr><tr>
                    <td class="tablefont" >gossip_menu_id<br><input class="cinputbox"  type="text" name="gossip_menu_id" value="<?php echo $result['gossip_menu_id'];?>"></td></tr><tr>
                    <td class="tablefont" >ScriptName<br><input class="cinputbox"  type="text" name="ScriptName" value="<?php echo $result['ScriptName'];?>"></td></tr><tr>
                </tr></table>
          

            </fieldset>
        </td>
    </tr>
</table>
 <div align="right"><input class="inputbtn" type="submit" name="submit" value="Save"></div>           
        