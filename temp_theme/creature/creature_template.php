<?php
    include('csessioncheck.php');
    //include('../includes/config.php');
    
       
    include('menu.php');
    include('includes/functions.php');
    
    function sqlCUpdate($FieldName,$UserValue){
        //UPDATE THE DATABASE
        $sql1 = "UPDATE creature_template SET $FieldName = '$UserValue' WHERE entry=".$_REQUEST['npc'];
        $sql = mysql_query($sql1) or die("Bad Query:$sql1<br/>".mysql_error());
        
        //SAVE TO A TEXT FILE FOR DISPLAY CHANGES
        $fh=fopen("quest_template.txt","a+");
        fwrite($fh,"UPDATE `creature_template` SET `$FieldName` = $UserValue WHERE `entry`=".$_REQUEST['npc'].";\n");
        fclose($fh);
    }
    //PUMP IN THE DATA UPDATES :-)
    if(isset($_POST['submit'])){
        
        //IF THEY CHANGE THE ENTRY, THEY ARE MAKING A NEW CREATURE SO WE'LL JUST DO IT ALL
        //RIGHT HERE
        if($_REQUEST['entry'] != $result['entry']){
            $sql = "INSERT INTO quest_template (entry) VALUE ($Entry)";
            $sql = @mysql_query($sql) or die("Cannot Insert Entry Item<br/>See creature_template.PHP");
            //SAVE TO A TEXT FILE FOR DISPLAY CHANGES
            
            //TODO: PUT SOMEWHERE ELSE FUNCTION?
            $fh=fopen("creature_template_update.txt","a+");
            fwrite($fh,date("D M j G:i:s")." - INSERT INTO `quest_template` (entry) VALUE ($Entry);"."\n");
            fclose($fh);
        }
            
        // FOR C/P TEMPLATES
        //if($_REQUEST['XXXX'.$i] != $result['XXXX'.$i]){sqlCUpdate('XXXX'.$i,$_REQUEST['XXXX'.$i]);}
        //if($_REQUEST['XXXX'.($i+2)] != $result['XXXX'.($i+2)]){sqlCUpdate('XXXX'.($i+2),$_REQUEST['XXXX'.($i+2)]);}
        // if($_REQUEST['xxxxxx'] != $result['xxxxxx']){sqlCUpdate('xxxxxx',$_REQUEST['xxxxxx']);}
        
        for($i=1;$i<=3;$i++){
            if($_REQUEST['difficulty_entry_'.$i] != $result['difficulty_entry_'.$i]){sqlCUpdate('difficulty_entry_'.$i,$_REQUEST['difficulty_entry_'.$i]);}
            if($_REQUEST['resistance'.$i] != $result['resistance'.$i]){sqlCUpdate('resistance'.$i,$_REQUEST['resistance'.$i]);}
            if($_REQUEST['resistance'.($i+3)] != $result['resistance'.($i+3)]){sqlCUpdate('resistance'.($i+3),$_REQUEST['resistance'.($i+3)]);}
            if($_REQUEST['questItem'.$i] != $result['questItem'.$i]){sqlCUpdate('questItem'.$i,$_REQUEST['questItem'.$i]);}
            if($_REQUEST['questItem'.($i+3)] != $result['questItem'.($i+3)]){sqlCUpdate('questItem'.($i+3),$_REQUEST['questItem'.($i+3)]);}
            if($i<3){
                if($_REQUEST['spell'.$i] != $result['spell'.$i]){sqlCUpdate('spell'.$i,$_REQUEST['spell'.$i]);}
                if($_REQUEST['spell'.($i+2)] != $result['spell'.($i+2)]){sqlCUpdate('spell'.($i+2),$_REQUEST['spell'.($i+2)]);}
            }
        }
        for($i=1;$i<=2;$i++){if($_REQUEST['KillCredit'.$i] != $result['KillCredit'.$i]){sqlCUpdate('KillCredit'.$i,$_REQUEST['KillCredit'.$i]);}}
        if($_REQUEST['subname'] != $result['subname']){sqlCUpdate('subname',$_REQUEST['subname']);}
        if($_REQUEST['IconName'] != $result['IconName']){sqlCUpdate('IconName',$_REQUEST['IconName']);}    
        for($i=1;$i<=4;$i++){if($_REQUEST['modelid'.$i] != $result['modelid'.$i]){sqlCUpdate('modelid'.$i,$_REQUEST['modelid'.$i]);} }
        if($_REQUEST['mingold'] != $result['mingold']){sqlCUpdate('mingold',$_REQUEST['mingold']);}
        if($_REQUEST['maxgold'] != $result['maxgold']){sqlCUpdate('maxgold',$_REQUEST['maxgold']);}
        if($_REQUEST['minlevel'] != $result['minlevel']){sqlCUpdate('minlevel',$_REQUEST['minlevel']);}
        if($_REQUEST['maxlevel'] != $result['maxlevel']){sqlCUpdate('maxlevel',$_REQUEST['maxlevel']);}
        if($_REQUEST['Mana_mod'] != $result['Mana_mod']){sqlCUpdate('Mana_mod',$_REQUEST['Mana_mod']);}
        if($_REQUEST['Health_mod'] != $result['Health_mod']){sqlCUpdate('Health_mod',$_REQUEST['Health_mod']);}
        if($_REQUEST['mindmg'] != $result['mindmg']){sqlCUpdate('mindmg',$_REQUEST['mindmg']);}
        if($_REQUEST['maxdmg'] != $result['maxdmg']){sqlCUpdate('maxdmg',$_REQUEST['maxdmg']);}
        if($_REQUEST['attackpower'] != $result['attackpower']){sqlCUpdate('attackpower',$_REQUEST['attackpower']);}
        if($_REQUEST['dmg_multiplier'] != $result['dmg_multiplier']){sqlCUpdate('dmg_multiplier',$_REQUEST['dmg_multiplier']);}
        if($_REQUEST['baseattacktime'] != $result['baseattacktime']){sqlCUpdate('baseattacktime',$_REQUEST['baseattacktime']);}
        if($_REQUEST['minrangedmg'] != $result['minrangedmg']){sqlCUpdate('minrangedmg',$_REQUEST['minrangedmg']);}
        if($_REQUEST['maxrangedmg'] != $result['maxrangedmg']){sqlCUpdate('maxrangedmg',$_REQUEST['maxrangedmg']);}
        if($_REQUEST['dmgschool'] != $result['dmgschool']){sqlCUpdate('dmgschool',$_REQUEST['dmgschool']);}
        if($_REQUEST['rangeattacktime'] != $result['rangeattacktime']){sqlCUpdate('rangeattacktime',$_REQUEST['rangeattacktime']);}
        if($_REQUEST['rangedattackpower'] != $result['rangedattackpower']){sqlCUpdate('rangedattackpower',$_REQUEST['rangedattackpower']);}
        if($_REQUEST['Health_mod'] != $result['Health_mod']){sqlCUpdate('Health_mod',$_REQUEST['Health_mod']);}
        if($_REQUEST['unit_class'] != $result['unit_class']){sqlCUpdate('unit_class',$_REQUEST['unit_class']);}
        if($_REQUEST['equipment_id'] != $result['equipment_id']){sqlCUpdate('equipment_id',$_REQUEST['equipment_id']);}
        if($_REQUEST['rank'] != $result['rank']){sqlCUpdate('rank',$_REQUEST['rank']);}
        if($_REQUEST['family'] != $result['family']){sqlCUpdate('family',$_REQUEST['family']);}
        if($_REQUEST['faction_A'] != $result['faction_A']){sqlCUpdate('faction_A',$_REQUEST['faction_A']);}
        if($_REQUEST['faction_H'] != $result['faction_H']){sqlCUpdate('faction_H',$_REQUEST['faction_H']);}
        if($_REQUEST['type'] != $result['type']){sqlCUpdate('type',$_REQUEST['type']);}
        if($_REQUEST['npcflag'] != $result['npcflag']){sqlCUpdate('npcflag',$_REQUEST['npcflag']);}
        if($_REQUEST['unit_flags'] != $result['unit_flags']){sqlCUpdate('unit_flags',$_REQUEST['unit_flags']);}
        if($_REQUEST['type_flags'] != $result['type_flags']){sqlCUpdate('type_flags',$_REQUEST['type_flags']);}
        if($_REQUEST['dynamicflags'] != $result['dynamicflags']){sqlCUpdate('dynamicflags',$_REQUEST['dynamicflags']);}
        if($_REQUEST['lootid'] != $result['lootid']){sqlCUpdate('lootid',$_REQUEST['lootid']);}
        if($_REQUEST['pickpocketloot'] != $result['pickpocketloot']){sqlCUpdate('pickpocketloot',$_REQUEST['pickpocketloot']);}
        if($_REQUEST['skinloot'] != $result['skinloot']){sqlCUpdate('skinloot',$_REQUEST['skinloot']);}
        if($_REQUEST['trainer_type'] != $result['trainer_type']){sqlCUpdate('trainer_type',$_REQUEST['trainer_type']);}
        if($_REQUEST['trainer_spell'] != $result['trainer_spell']){sqlCUpdate('trainer_spell',$_REQUEST['trainer_spell']);}
        if($_REQUEST['trainer_race'] != $result['trainer_race']){sqlCUpdate('trainer_race',$_REQUEST['trainer_race']);}
        if($_REQUEST['trainer_class'] != $result['trainer_class']){sqlCUpdate('trainer_class',$_REQUEST['trainer_class']);}
        if($_REQUEST['Armor_mod'] != $result['Armor_mod']){sqlCUpdate('Armor_mod',$_REQUEST['Armor_mod']);}
        if($_REQUEST['speed_walk'] != $result['speed_walk']){sqlCUpdate('speed_walk',$_REQUEST['speed_walk']);}
        if($_REQUEST['speed_run'] != $result['speed_run']){sqlCUpdate('speed_run',$_REQUEST['speed_run']);}
        if($_REQUEST['scale'] != $result['scale']){sqlCUpdate('scale',$_REQUEST['scale']);}
        if($_REQUEST['VehicleId'] != $result['VehicleId']){sqlCUpdate('VehicleId',$_REQUEST['VehicleId']);}
        if($_REQUEST['PetSpellDataId'] != $result['PetSpellDataId']){sqlCUpdate('PetSpellDataId',$_REQUEST['PetSpellDataId']);}
        if($_REQUEST['AIName'] != $result['AIName']){sqlCUpdate('AIName',$_REQUEST['AIName']);}
        if($_REQUEST['MovementType'] != $result['MovementType']){sqlCUpdate('MovementType',$_REQUEST['MovementType']);}
        if($_REQUEST['movementId'] != $result['movementId']){sqlCUpdate('movementId',$_REQUEST['movementId']);}
        if($_REQUEST['InhabitType'] != $result['InhabitType']){sqlCUpdate('InhabitType',$_REQUEST['InhabitType']);}
        if($_REQUEST['gossip_menu_id'] != $result['gossip_menu_id']){sqlCUpdate('gossip_menu_id',$_REQUEST['gossip_menu_id']);}
        if($_REQUEST['ScriptName'] != $result['ScriptName']){sqlCUpdate('ScriptName',$_REQUEST['ScriptName']);}
        if($_REQUEST['mechanic_immune_mask'] != $result['mechanic_immune_mask']){sqlCUpdate('mechanic_immune_mask',$_REQUEST['mechanic_immune_mask']);}
        if($_REQUEST['flags_extra'] != $result['flags_extra']){sqlCUpdate('flags_extra',$_REQUEST['flags_extra']);}
        
        //RELOAD THE TABLE
        include('loadctable.php');
        
        //SHOW SUCCESS - MAKE 'EM FEEL GOOD!!
        echo "<center><font color='#00ff00'>UPDATE SUCCESSFUL</font></center><br/>";
        
    }// END SUBMIT CHECK
   
?>
<form method="post">
<table width="900" >  
  <tr>
      <td>
        <fieldset>
            <legend>Creature I</legend>
                <table class="resultsborder" ><tr><td class="tablefont" >
                    <table>
                        <tr>
                            <td class="tablefont" >Entry<sup>1</sup><br><input class="cinputbox"  type="text" name="entry" value="<?php echo $result['entry'];?>"></td>
                            <td class="tablefont" >difficulty_entry_1<br><input class="cinputbox"  type="text" name="difficulty_entry_1" value="<?php echo $result['difficulty_entry_1'];?>"></td>
                            <td class="tablefont" >difficulty_entry_2<br><input class="cinputbox"  type="text" name="difficulty_entry_2" value="<?php echo $result['difficulty_entry_2'];?>"></td>
                            <td class="tablefont" >difficulty_entry_3<br><input class="cinputbox"  type="text" name="difficulty_entry_3" value="<?php echo $result['difficulty_entry_3'];?>"></td>
                        </tr><tr>
                            <td class="tablefont" >KillCredit1<br><input class="cinputbox"  type="text" name="KillCredit1" value="<?php echo $result['KillCredit1'];?>"></td>
                            <td class="tablefont" >KillCredit2<br><input class="cinputbox"  type="text" name="KillCredit2" value="<?php echo $result['KillCredit2'];?>"></td>
                            <td class="tablefont"  colspan="2">Name<br><input   size="30" type="text" name="name" value="<?php echo $result['name'];?>"></td>
                        </tr><tr>
                            <td class="tablefont" >subname<br><input class="cinputbox"  type="text" name="subname" value="<?php echo $result['subname'];?>"></td>
                            <td class="tablefont" >exp<br><input class="cinputbox"  type="text" name="exp" value="<?php echo $result['exp'];?>"></td>
                            <td class="tablefont"  colspan="2">IconName<br><input class="cinputbox"  type="text" name="IconName" value="<?php echo $result['IconName'];?>"></td>
                        </tr><tr>
                            <?php for($i=1;$i<=4;$i++){
                                echo '
                                    <td class="tablefont" >
                                    modelid'.$i.'<br>
                                    <input class="cinputbox"  type="text"
                                    name="modelid'.$i.'"
                                    value="'.$result['modelid'.$i].'"</td>';
                            }?>
                        </tr><tr>
                            <td class="tablefont" >mingold<br><input class="cinputbox"  type="text" name="mingold" value="<?php echo $result['mingold'];?>"></td>
                            <td class="tablefont" >maxgold<br><input class="cinputbox"  type="text" name="maxgold" value="<?php echo $result['maxgold'];?>"></td>
                            <td class="tablefont" >minlevel<br><input class="cinputbox"  type="text" name="minlevel" value="<?php echo $result['minlevel'];?>"></td>
                            <td class="tablefont" >maxlevel<br><input class="cinputbox"  type="text" name="maxlevel" value="<?php echo $result['maxlevel'];?>"></td>
                        </tr><tr>
                            <td class="tablefont" >Mana_mod<br><input class="cinputbox"  type="text" name="Mana_mod" value="<?php echo $result['Mana_mod'];?>"></td>
                            <td class="tablefont" >Health_mod<br><input class="cinputbox"  type="text" name="Health_mod" value="<?php echo $result['Health_mod'];?>"></td>
                        </tr>
                </table>
        </fieldset>              
     </td>
                
                </tr></table></td>
    <td class="tablefont"  valign="top">
      <table class="resultsborder">        
        <tr>
          <td class="tablefont"  valign="top">Creature II
                <table class="resultsborder"><tr>
                    <td class="tablefont" >mindmg<br><input class="cinputbox"  type="text" name="mindmg" value="<?php echo $result['mindmg'];?>"></td>
                    <td class="tablefont" >maxdmg<br><input class="cinputbox"  type="text" name="maxdmg" value="<?php echo $result['maxdmg'];?>"></td>
                    <td class="tablefont" >attackpower<br><input class="cinputbox"  type="text" name="attackpower" value="<?php echo $result['attackpower'];?>"></td>
                    <td class="tablefont" >dmg_multiplier<br><input class="cinputbox"  type="text" name="dmg_multiplier" value="<?php echo $result['dmg_multiplier'];?>"></td>
                    <td class="tablefont" >baseattacktime<br><input class="cinputbox"  type="text" name="baseattacktime" value="<?php echo $result['baseattacktime'];?>"></td>
                </tr><tr>
                     <td class="tablefont" >minrangedmg<br><input class="cinputbox"  type="text" name="minrangedmg" value="<?php echo $result['minrangedmg'];?>"></td>
                    <td class="tablefont" >maxrangedmg<br><input class="cinputbox"  type="text" name="maxrangedmg" value="<?php echo $result['maxrangedmg'];?>"></td>
                    <td class="tablefont" >dmgschool<br><input class="cinputbox"  type="text" name="dmgschool" value="<?php echo $result['dmgschool'];?>"></td>
                    <td class="tablefont" >rangeattacktime<br><input class="cinputbox"  type="text" name="rangeattacktime" value="<?php echo $result['rangeattacktime'];?>"></td>
                    <td class="tablefont" >rangedattackpower<br><input class="cinputbox"  type="text" name="rangedattackpower" value="<?php echo $result['rangedattackpower'];?>"></td>
                </tr><tr>
                     <td class="tablefont" >Health_mod<br><input class="cinputbox"  type="text" name="Health_mod" value="<?php echo $result['Health_mod'];?>"></td>
                    <td class="tablefont" >unit_class<br><input class="cinputbox"  type="text" name="unit_class" value="<?php echo $result['unit_class'];?>"></td>
                    <td class="tablefont" >equipment_id<br><input class="cinputbox"  type="text" name="equipment_id" value="<?php echo $result['equipment_id'];?>"></td>
                    <td class="tablefont" >trainer_id<br><input class="cinputbox"  type="text" name="trainer_id" value="NOT USED"></td>
                    <td class="tablefont" >vendor_id<br><input class="cinputbox"  type="text" name="vendor_id" value="NOT USED"></td>
                </tr><tr>
                     <td class="tablefont" >rank<br><input class="cinputbox"  type="text" name="rank" value="<?php echo $result['rank'];?>"></td>
                    <td class="tablefont" >family<br><input class="cinputbox"  type="text" name="family" value="<?php echo $result['family'];?>"></td>
                    <td class="tablefont" >faction_A<br><input class="cinputbox"  type="text" name="faction_A" value="<?php echo $result['faction_A'];?>"></td>
                    <td class="tablefont" >faction_H<br><input class="cinputbox"  type="text" name="faction_H" value="<?php echo $result['faction_H'];?>"></td>
                    <td class="tablefont" >type<br><input class="cinputbox"  type="text" name="type" value="<?php echo $result['type'];?>"></td>
                 </tr><tr>
                     <td class="tablefont" >npcflag<br><input class="cinputbox"  type="text" name="npcflag" value="<?php echo $result['npcflag'];?>"></td>
                    <td class="tablefont" >unit_flags<br><input class="cinputbox"  type="text" name="unit_flags" value="<?php echo $result['unit_flags'];?>"></td>
                    <td class="tablefont" >type_flags<br><input class="cinputbox"  type="text" name="type_flags" value="<?php echo $result['type_flags'];?>"></td>
                    <td class="tablefont" >dynamicflags<br><input class="cinputbox"  type="text" name="dynamicflags" value="<?php echo $result['dynamicflags'];?>"></td>
                </tr></table>
          </td></tr></table></td></tr>
  <tr>
    <td class="tablefont"  valign="top">
      <table class="resultsborder">
        
        <tr>
          <td class="tablefont" >loot
                <table class="resultsborder"><tr>
                    <td class="tablefont" >lootid<br><input class="cinputbox"  type="text" name="lootid" value="<?php echo $result['lootid'];?>"></td></tr><tr>
                    <td class="tablefont" >pickpocketloot<br><input class="cinputbox"  type="text" name="pickpocketloot" value="<?php echo $result['pickpocketloot'];?>"></td></tr><tr>
                    <td class="tablefont" >skinloot<br><input class="cinputbox"  type="text" name="skinloot" value="<?php echo $result['skinloot'];?>"></td></tr><tr>
                </tr></table>
          </td>
          <td class="tablefont" >resistance
                <table class="resultsborder"><tr>
                    <?php for($i=1;$i<=3;$i++){
                        echo '
                            <td class="tablefont" >resistance'.$i.'<br><input class="cinputbox"  type="text" name="resistance'.$i.'" value="'.$result['resistance'.$i].'"></td>
                            <td class="tablefont" >resistance'.($i+3).'<br><input class="cinputbox"  type="text" name="resistance'.($i+3).'" value="'.$result['resistance'.($i+3)].'"></td>
                            </tr><tr>';
                    }?>
                </tr></table>
          
          </td></tr></table></td>
    <td class="tablefont"  valign="top" rowspan="2">
      <table class="resultsborder">
        
        <tr>
          <td class="tablefont"  valign="top">Trainer
                <table class="resultsborder"><tr>
                    <td class="tablefont" >trainer_type<br><input class="cinputbox"  type="text" name="trainer_type" value="<?php echo $result['trainer_type'];?>"></td>
                    <td class="tablefont" >trainer_spell<br><input class="cinputbox"  type="text" name="trainer_spell" value="<?php echo $result['trainer_spell'];?>"></td>
                </tr><tr>
                    <td class="tablefont" >trainer_race<br><input class="cinputbox"  type="text" name="trainer_race" value="<?php echo $result['trainer_race'];?>"></td>
                    <td class="tablefont" >trainer_class<br><input class="cinputbox"  type="text" name="trainer_class" value="<?php echo $result['trainer_class'];?>"></td>
                </tr></table>
                <br/>
                spells
                <table class="resultsborder"><tr>
                    <?php for($i=1;$i<=2;$i++){
                        echo '
                            <td class="tablefont" >spell'.$i.'<br><input class="cinputbox"  type="text" name="spell'.$i.'" value="'.$result['spell'.$i].'"></td>
                            <td class="tablefont" >spell'.($i+2).'<br><input class="cinputbox"  type="text" name="spell'.($i+2).'" value="'.$result['spell'.($i+3)].'"></td>
                            </tr><tr>';
                    }?>
                </tr></table>
          
          </td>
          <td class="tablefont"  valign="top" rowspan="2">Armor-Speed
                 <table class="resultsborder"><tr>
                    <td class="tablefont"  colspan="2">Armor_mod<br><input class="cinputbox"  type="text" name="Armor_mod" value="<?php echo $result['Armor_mod'];?>"></td></tr><tr>
                    <td class="tablefont" >speed_walk<br><input class="cinputbox"  size="5" type="text" name="speed_walk" value="<?php echo $result['speed_walk'];?>"></td>
                    <td class="tablefont" >speed_run<br><input class="cinputbox"  size="5" type="text" name="speed_run" value="<?php echo $result['speed_run'];?>"></td></tr><tr>
                    <td class="tablefont"  colspan="2">scale<br><input class="cinputbox"  type="text" name="scale" value="<?php echo $result['scale'];?>"></td></tr><tr>
                </tr></table>
                 <br/>
                 misc
                 <table class="resultsborder"><tr>
                    <td class="tablefont" >VehicleId<br><input class="cinputbox"  type="text" name="VehicleId" value="<?php echo $result['VehicleId'];?>"></td></tr><tr>
                    <td class="tablefont" >PetSpellDataId<br><input class="cinputbox"  size="5" type="text" name="PetSpellDataId" value="<?php echo $result['PetSpellDataId'];?>"></td>
                </tr></table>
          </td>
          <td class="tablefont"  valign="top">Behavior
                <table class="resultsborder"><tr>
                    <td class="tablefont" >AIName<br><input class="cinputbox"  type="text" name="AIName" value="<?php echo $result['AIName'];?>"></td></tr><tr>
                    <td class="tablefont" >MovementType<br><input class="cinputbox"  type="text" name="MovementType" value="<?php echo $result['MovementType'];?>"></td></tr><tr>
                    <td class="tablefont" >movementId<br><input class="cinputbox"  type="text" name="movementId" value="<?php echo $result['movementId'];?>"></td></tr><tr>
                    <td class="tablefont" >InhabitType<br><input class="cinputbox"  type="text" name="InhabitType" value="<?php echo $result['InhabitType'];?>"></td></tr><tr>
                    <td class="tablefont" >gossip_menu_id<br><input class="cinputbox"  type="text" name="gossip_menu_id" value="<?php echo $result['gossip_menu_id'];?>"></td></tr><tr>
                    <td class="tablefont" >ScriptName<br><input class="cinputbox"  type="text" name="ScriptName" value="<?php echo $result['ScriptName'];?>"></td></tr><tr>
                </tr></table>
          
          </td></tr></table></td></tr>
  <tr>
    <td class="tablefont"  valign="top">
      <table class="resultsborder">
        
        <tr>
          <td class="tablefont"  valign="top">QuestItems
             <table class="resultsborder"><tr>
                    <?php for($i=1;$i<=3;$i++){
                        echo '
                            <td class="tablefont" >questItem'.$i.'<br><input class="cinputbox"  type="text" name="questItem'.$i.'" value="'.$result['questItem'.$i].'"></td>
                            <td class="tablefont" >questItem'.($i+3).'<br><input class="cinputbox"  type="text" name="questItem'.($i+3).'" value="'.$result['questItem'.($i+3)].'"></td>
                            </tr><tr>';
                    }?>
                </tr></table>
          </td>
          <td class="tablefont"  valign="middle">
            <input type="checkbox" name="RacialLeader" value="0">RacialLeader<br>
            mechanic_immune_mask<br>
            <input class="cinputbox"  type="text" name="mechanic_immune_mask" value="<?php echo $result['mechanic_immune_mask'];?>"><br/>
            flags_extra<br/>
            <input class="cinputbox"  type="text" name="flags_extra" value="<?php echo $result['flags_extra'];?>">
          </td>
        </tr></table>
    </td></tr><tr>
    <td class="tablefont"  valign="top" align="left" colspan="2">
        <span style="background-color:#ffff00;font-family:verdana;">
            <font color="#ff0000" size="2">
                <?php echo CREATURE_ENTRY;?>
            </font>
            </span><p/>
        <div align="right"><input class="cinputbox"  type="submit" name="submit" value="Save" size="20"></div>
    </td>
    </tr></table></p>
</form>
</body>
</html>
        