<?php
   
    include('menu.php');
    include('language/en.php');
    
   
    //CONNECT TO THE WORLD
    @mysql_selectdb(SQL_WORLD_DATABASE) or
        die("Bad Database");
        
    
    //FIND OUR CREATURE
    $questID = $_REQUEST['quest'];
    
    //FIND GIVER USING THE QUEST RELATION(taker)
    $sql = "SELECT * FROM creature_involvedrelation WHERE quest=$questID";
    $sql = mysql_query($sql);
    $NpcGiver = mysql_fetch_array($sql);
    
    //ASSIGN THE GIVER
    $creatureID = $NpcGiver['id'];
    
    //USER THE GIVER ID TO FIND THE FULL INFO OF OUR GIVER FROM CREATURE TEMPLATE
    $sql = "SELECT * FROM creature_template WHERE entry='$creatureID'";
    $sql = mysql_query($sql) or die("Bad NPC query: $sql</b><br/>".mysql_error());
    $npc = mysql_fetch_array($sql);
    
    //FIND THE CREATURE POS
    $sql = "SELECT * FROM creature WHERE id='$creatureID'";
    $sql = mysql_query($sql) or die("Bad NPC query: $sql</b><br/>".mysql_error());
    //LOAD THE RESULTS
    $npcPos = mysql_fetch_array($sql);
    
    //IF THEY CLICKED A BUTTON
    if(isset($_REQUEST['submit'])){
        $sql = "UPDATE creature_involvedrelation SET id=$entryID WHERE quest=$questID";
        $sql = mysql_query($sql);
    }
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
        <h1>Who/What Gives you the quest</h1>
       
        <table width="900"><tr>
             <form method="post">
            <td><fieldset>
                <legend>Creature Information</legend>
                    <table width="900" ><b>
                        <tr>
                            <td class="tablefont" >entry:</b><br/><input type="text" name="id" value="<?php echo $npc['entry'];?>" size="10"></td>
                            <td class="tablefont" width="200" ><b>Name:</b><br><a href="creature_template.php?npc=<?php echo $creatureID;?>"><?php echo $npc['name'];?></a></td>
                            <td class="tablefont" width="100" ><b>npcflag</b><br><?php echo $npc['npcflag'];?></td>
                            <td class="tablefont" width="100" ><b>position_x</b><br><?php echo $npcPos['position_x'];?></td>
                            <td class="tablefont" width="100" ><b>position_y</b><br><?php echo $npcPos['position_y'];?></td>
                            <td class="tablefont" width="100" ><b>position_z</b><br><?php echo $npcPos['position_z'];?></td>
                            <td class="tablefont" width="100" ><b>orientation</b><br><?php echo $npcPos['orientation'];?></td>
                        </tr><tr>
                            <td colspan="8 " align="right">
                                &nbsp;<p/>
                                <input type="submit" name="update" value="Update">
                                <input type="submit" name="submit" value="Save">
                            </td>
                        </tr><tr>
                        <td colspan="8">
                            <hr>
                                <span class="tablefont"><?php echo UPDATE_GOSSIP."<br/>".CREATURESEL_GOSSIP;?> </span>
                        </td>
                        </tr>
                </table>
            </fieldset></td>
            </form>
        </tr></table>
        
        
            
             
            