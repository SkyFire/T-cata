<?php

                
            if(isset($_POST['ci'])){
                $name="edit";
                $value="Update";
                $header = "Edit as needed then click Update";
                //GET CREATURE AND ITS LOOT
                mysql_selectdb(SQL_WORLD_DATABASE);
                $sql = mysql_query("SELECT * FROM creature_loot_template WHERE item=".$_POST['ci']) or die(mysql_error());
                $result = mysql_fetch_array($sql);
                
            }else{
                $name="insert";
                $value="Insert";
                $header="Enter info to add new item to list";
            }
            
            if(isset($_POST['edit'])){
                //GET CREATURE AND ITS LOOT
                mysql_selectdb(SQL_WORLD_DATABASE);
                $sql = mysql_query("SELECT * FROM creature_loot_template WHERE item=".$_POST['ci']) or die(mysql_error());
                $result = mysql_fetch_array($sql);
                
                $sql = "UPDATE creature_loot_template SET `ChanceOrQuestChance`=".$_POST['ChanceOrQuestChance'].",
                        `lootmode`=".$_POST['lootmode'].",
                        `groupid`=".$_POST['groupid'].",
                        `mincountOrRef`=".$_POST['mincountOrRef'].",
                        `maxcount`=".$_POST['maxcount']." WHERE `item`=".$_POST['ci'];
                        echo $sql."<br/>";
                $sql1 = mysql_query($sql) or die ("bad query<br>$sql<br/>".mysql_error());
                header('location:creature_loot.php?npc='.$_REQUEST['npc']);
                die();
            }
            
            
            //CLEAR INFO AND REVERT BACK TO NEW INSERT
            if(isset($_POST['clear'])){header('location:creature_loot.php?npc='.$_REQUEST['npc']);}
?>   

<form method="post">
     <fieldset>
        <legend><?php echo $header;?></legend>
            <table>
                <tr>
                    <td>item<br><input type="text" name="item" value="<?php if(isset($_POST['ci'])){echo $result['item'];}?>"></td>
                    <td>name<br><input type="text" name="iemname" value="<?php if(isset($_POST['ci'])){echo itemName($result['item']);}?>"></td>
                    <td>Drop %<br><input title="Must be a negative number for quest drops" type="text" name="ChanceOrQuestChance" value="<?php if(isset($_POST['ci'])){echo $result['ChanceOrQuestChance'];}?>"></td>
                     <td>lootmode<br><input type="text" name="lootmode" value="<?php if(isset($_POST['ci'])){echo $result['lootmode'];}?>"></td>
                </tr><tr>
                    <td>groupid<br><input type="text" name="groupid" value="<?php if(isset($_POST['ci'])){echo $result['groupid'];}?>"></td>
                    <td>MinCnt<br><input type="text" name="mincountOrRef" value="<?php if(isset($_POST['ci'])){echo $result['mincountOrRef'];}?>"></td>
                    <td>maxCnt<br><input type="text" name="maxcount" value="<?php if(isset($_POST['ci'])){echo $result['maxcount'];}?>"></td>
                </tr>
            </table>
    </fieldset>
     <p/>
     <p/><div align="right">
     <input type="submit" name="clear" value="Clear" title="Click to revert to entry mode" class="inputbtn">   
     <input type="submit" name="<?php echo $name;?>" value="<?php echo $value;?>" class="inputbtn"></div>
     </form>
     <p/>
    <fieldset>
        <legend>Click to change existing data</legend>
            <table cellpadding="5"><tr>
            <td>entry</td><td>item</td><td>name</td><td>Drop %</td><td>lootmode</td>
            <td>groupid</td><td>min</td><td>max</td></tr><tr>
            <?php
                //GET CREATURE AND ITS LOOT
                mysql_selectdb(SQL_WORLD_DATABASE);
                $sql = mysql_query("SELECT * FROM creature_loot_template WHERE entry=$id") or die(mysql_error());
                $switch = 1;
                while($result = mysql_fetch_array($sql)){
                    if($switch==1){$class = "level1";}else{$class="level2";}
                    $switch *=-1;
                    echo "<td class=\"$class\">".$result['entry']."</td>";
                    echo "<td class=\"$class\"><a href=\"creature_loot.php?npc=$id&ci=".$result['item']."\">".$result['item']."</a></td>";
                    echo "<td class=\"$class\"><a href=\"creature_loot.php?npc=$id&ci=".$result['item']."\">".itemName($result['item'])."</a></td>";
                    echo "<td class=\"$class\">".$result['ChanceOrQuestChance']."</td>";
                    echo "<td class=\"$class\">".$result['lootmode']."</td>";
                    echo "<td class=\"$class\">".$result['groupid']."</td>";
                    echo "<td class=\"$class\">".$result['mincountOrRef']."</td>";
                    echo "<td class=\"$class\">".$result['maxcount']."</td></tr><tr>";
                } ?>
            </tr></table>
    </fieldset>

