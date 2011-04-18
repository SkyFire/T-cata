<?php
    
    $id = $_REQUEST['npc'];
    $npc = creature($id);
                
    if (isset($_POST['update']) OR isset($_POST['add']))
    {
        if (isset($_POST['add']))
        {
            /**
             * IF ADD: CHECK FIRST TO SEE IF THE ITEM IS ALREADY IN LOOG
             * */
            $query = "SELECT * FROM `creature_loot_template` WHERE `item` = ".$_POST['item']." && `entry` = $id";
            $sql = mysql_query($query) or die(mysql_error());
            
            /**
             * IF IT DOES NOT EXIST ALREADY THEN ADD IT
             * */
            if ( ! $result = mysql_fetch_array($sql))
            {
                $query = "INSERT INTO `creature_loot_template` (`entry`,`item`) VALUES ($id,".$_POST['item'].")";
                $sql = mysql_query($query) or die (mysql_error());
            }
        }/** ADD **/
        
        if (isset($_POST['update']))
        {
            /**
             * CHECK TO SEE IF ANYTHING IS DELETED
             * */
            if (isset($_POST['del_item'])) {$del_item = $_POST['del_item'];}
            
            if ( ! empty($del_item))
            {
                $deleted_items_total = count($del_item);
                for ($i = 0; $i<=$deleted_items_total-1; $i++)
                {
                    if ($del_item[$i] > "" &&
                        $del_item[$i] != 'del_item')
                    {
                        $query = "DELETE FROM `creature_loot_template` WHERE `item` = ".$del_item[$i]." AND `entry` = $id";
                        $sql = mysql_query($query) or die("Bad query<br>$query<br/>".mysql_error());
                    }
                }
            }
            else
            {
            
                /**
                 * IF DEL IS EMPTY THEY ARE EDITING AN ENTRY
                 * */
                unset($_POST['update']);
                unset($_POST['add']);
            
            
            
                $total_items = count($_POST['item_count']);
                $userData = $_POST;
                
                for($i=0;$i<=$total_items-1;$i++)
                {
                    foreach($userData as $field[$i] => $value)
                    {
                        if($value > "" &&
                           $field[$i] != 'item_number' &&
                           $field[$i] != 'item_count' &&
                           $field[$i] != 'entry' &&
                           $field[$i] != 'item')
                        {
                            $query = "UPDATE `creature_loot_template` SET `$field[$i]`=$value[$i] WHERE `item` = ".$_POST['item_count'][$i]." AND `entry` = $id";
                            ## $query = "SELECT * FROM `creature_loot_template` WHERE `entry` = $id AND `item` = ".$_POST['item_count'][$i];
                            $sql = mysql_query($query) or die("Bad query<br>$query<br/>".mysql_error());
                    
                        }
                    }
                }
            }
            
            
        }/** UPDATE **/
        
        
    }
?>
     <p/>
     <font color="#00ff00">
        You can ADD, DELETE or EDIT in multiples but NOT all three at the same time.
     </font>
     <form method="post">
    <fieldset>
        <legend>Add a drop item for <span class="npcnames"><?php echo $npc['name'];?></span></legend>
            <table>
                <tr>
                    <td>Item #<br><input type="text" name="item" ></td>
                </tr>
            </table>
    </fieldset>
    <p/>
    <div align="right"><input type="submit" name="add" value="Add Item" class="inputbtn"></div>
    <p/>
    
    <fieldset>
        <legend>What loot <span class="npcnames"><?php echo $npc['name'];?></span> drops</legend>
            <table cellpadding="5"><tr>
            <td>item</td><td>name</td><td>Drop %</td><td>lootcond</td>
            <td>groupid</td><td>min</td><td>max</td>
            <td>delete</td>
            </tr><tr>
            <?php
                /** useful chkbox info http://www.html-form-guide.com/php-form/php-form-checkbox.html **/
                //GET CREATURE AND ITS LOOT
                mysql_selectdb(SQL_WORLD_DATABASE);
                $sql = mysql_query("SELECT * FROM creature_loot_template WHERE entry=$id") or die(mysql_error());
                $switch = 1;
                while($result = mysql_fetch_array($sql)){
                    if($switch==1){$class = "level1";}else{$class="level2";}
                    $switch *=-1;?>
                        <tr>
                        <td valign="top" class="<?php echo $class;?>"><a href="item_template.php?item=<?php echo $result['item'];?>"><?php echo $result['item'];?></a></td>
                        <td valign="top"  class="<?php echo $class;?>">
                            <a href="item_template.php?item=<?php echo $result['item'];?>"><?php echo itemName($result['item']);?></a>
                            <input type="hidden" name="item_number" value="<?php echo $result['item'];?>">
                        </td>
                        <td valign="top"  class="<?php echo $class;?>"><input size="10" type="text"     name="ChanceOrQuestChance[]"  value="<?php echo $result['ChanceOrQuestChance'];?>"></td>
                        <td valign="top"  class="<?php echo $class;?>"><input size="10"  type="text"    name="lootcondition[]"        value="<?php echo $result['lootcondition'];?>"></td>
                        <td valign="top"  class="<?php echo $class;?>"><input size="10"  type="text"    name="groupid[]"              value="<?php echo $result['groupid'];?>"></td>
                        <td valign="top"  class="<?php echo $class;?>"><input size="10"  type="text"    name="mincountOrRef[]"        value="<?php echo $result['mincountOrRef'];?>"></td>
                        <td valign="top"  class="<?php echo $class;?>"><input size="10"  type="text"    name="maxcount[]"             value="<?php echo $result['maxcount'];?>"></td>
                        <td valign="top"  class="<?php echo $class;?>"><input size="2" type="checkbox"  name="del_item[]"           value="<?php echo $result['item'];?>">
                        <input type="hidden" name="item_count[]" value="<?php echo $result['item'];?>"></td>
                        </tr>
                <?php } ?>
            </tr></table>
    </fieldset>
    <p>
        <div align="right">
            <input type="submit" name="update" value="Update Loot" class="inputbtn">
            
        </div>
    </p> 
     </form>
