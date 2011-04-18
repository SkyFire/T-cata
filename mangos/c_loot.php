<?php
    
    include('init.php');
    include('page.parts/header.php');
    
    //GET CREATURE AND ITS LOOT
    mysql_selectdb(SQL_WORLD_DATABASE);
    $sql = mysql_query("SELECT * FROM `creature_loot_template` WHERE `entry`=".$_REQUEST['npc']) or die(mysql_error());
    $result = mysql_fetch_array($sql);
    
     if (isset($_POST['submit']))
    {
        
        updateRecords($_POST,$result,SQL_WORLD_DATABASE,"creature_loot_template","entry",$_REQUEST['npc'],"");
        $result = mysql_fetch_array($sql);
        die("
            <center>
            Updated successfully<br/>
            <p><a href=\"javascript:self.close()\">close</a> window.</p>
            </center>
            ");
        
                
    }
    
   
?>

<div id="container">
    <!--### LEFT COLUMN ###-->
    <div id="col-l">
        <div class="CntBox">
            <div class="CntHead"><div class="CntHeadTitle">Editing Loot</div></div>
                <div class="CntFiller">
                    <div class="CntInfo">
<center>
<form method="post">
     <fieldset>
        <legend>Current Item</legend>
            <table>
                <tr>
                    <td>entry<br><input type="text" name="entry" value="<?php echo $result['entry'];?>"></td>
                    <td>item<br><input type="text" name="item" value="'<?php echo itemName($result['item']);?>'"></td>
                    <td>Drop %<br><input title="Must be a negative number for quest drops" type="text" name="ChanceOrQuestChance" value="<?php echo $result['ChanceOrQuestChance'];?>"></td>
                     <td>lootcond<br><input type="text" name="lootcondition" value="<?php echo $result['lootcondition'];?>"></td>
                </tr><tr>
                    <td>groupid<br><input type="text" name="groupid" value="<?php echo $result['groupid'];?>"></td>
                    <td>MinCnt<br><input type="text" name="mincountOrRef" value="<?php echo $result['mincountOrRef'];?>"></td>
                    <td>maxCnt<br><input type="text" name="maxcount" value="<?php echo $result['maxcount'];?>"></td>
                </tr>
            </table>
    </fieldset>
    
     <p/><div align="right"><input type="submit" name="submit" value="Submit" class="inputbtn"></div>
     </form>
     <p/>
    <p><a href="javascript:self.close()">close</a> window.</p>
     </div>
 
 </div>
 </div><!-- END LEFT COLUMN -->
    </div><div class="clearB"></div>
    
