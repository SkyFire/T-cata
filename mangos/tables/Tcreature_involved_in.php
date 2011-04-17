<?php
    mysql_selectdb(SQL_WORLD_DATABASE);
    
    $id = $_REQUEST['npc'];
     $npc = creature($_REQUEST['npc']);
    
	
	//DID USER SUBMIT? 
    if(isset($_POST['submit']))
    {
	   $quest_change 					= $_POST['questid'];
	   $quest_method 					= $_POST['questmethod'];
	   $quest_delete 					= 0;
	   
	   if(isset($_POST['delete'])){$quest_delete = 1;}
	   
	   //ADDING QUEST
	   if($quest_delete == 0){
	   
			switch ($quest_method){
				case "giver":
					$sql = "INSERT INTO `creature_questrelation` (`id`,`quest`) VALUES ($id,$quest_change)";					
					break;
				case "taker":
					$sql = "INSERT INTO `creature_involvedrelation` (`id`,`quest`) VALUES ($id,$quest_change)";
					break;
				default:
					die("Quest Update Error");
					break;
			}//END SWITCH
	   }
       else
       {
			switch ($quest_method){
				case "giver":
					$sql = "DELETE FROM `creature_questrelation` WHERE `id` =  $id";					
					break;
				case "taker":
					$sql = "DELETE FROM `creature_involvedrelation` WHERE `id` = $id";
					break;
				default:
					die("Quest Deletion Error");
					break;
			}//END SWITCH
			
			
	   }//DELETE ?
	   
	   //RUN THE QUERY
		$query = mysql_query($sql) or die("Bad Query creature involved in<br>$sql<br/>".mysql_error());
		
		//EXPORT TO TEXT FILE
		saveSQL($sql,"creature_involed_updates.sql","");
    }//SUBMIT
?>
<form method="post">
<fieldset>
    <legend>Options</legend>
    <table>
        <tr>
            <td>Add/Remove QuestId: <input type="text" name="questid"
                title="If you are removing, make sure DELETE box is checked or it will be added(default)"> to/from the -> </td>
            <td><input type="radio" name="questmethod" value="giver" checked="checked">Giver</td>
            <td><input type="radio" name="questmethod" value="taker" width="400">Recipient</td> <td></td>
        </tr>
    </table>
    <div align="right"><span title="Checking this will delete whatever radio button is on">
        <input type="checkbox" name="delete" >Delete&nbsp;&nbsp;&nbsp;</span>
    <input type="submit" name="submit" value="Edit" class="inputbtn"></div>
</fieldset>
</form><br/>
    <fieldset>
        <legend>...as a quest giver</legend>
            <table>
                <tr>
                    <th width="50">id</th><th width="50">Lvl</th><th width="150">title</th><th width="250">Objective</th>
                </tr>
                    <?php
                        $switch = -1;
                        $query = "SELECT * FROM `creature_questrelation` WHERE `id` = ".$_REQUEST['npc'];
                        $sql = mysql_query($query) or die( mysql_error());
                        while($result = mysql_fetch_array($sql)){
                            
                            //MAKE IT PURTY!
                            if($switch==1){$class = "level1";}else{$class="level2";}
                            $switch *=-1;
                            
                            //LOAD QUEST INFO
                            $quest = quest($result['quest']);
                            
                            //DISPLAY TABLE
                            echo "<tr><td class=\"$class\"><a href=\"quest_recieve.php?quest=".$quest['entry']."\">".$result['quest']."</a></td>";
                            echo "<td class=\"$class\">".$quest['QuestLevel']."</td>";
                            echo "<td class=\"$class\"><a href=\"quest_recieve.php?quest=".$quest['entry']."\">".$quest['Title']."</a></td>";
                            echo "<td class=\"$class\">".substr($quest['Objectives'],0,40)."...</td>";
                            echo "</tr>";
                        }
                    ?>
            </table>
    </fieldset>


<p/>

    <fieldset>
        <legend>...as a recipient</legend>
             <table>
                <tr>
                    <th width="50">id</th><th width="50">Lvl</th><th width="150">title</th><th width="250">Objective</th>
                </tr>
                    <?php
                        $switch = -1;
                        $query = "SELECT * FROM `creature_involvedrelation` WHERE `id` = ".$_REQUEST['npc'];
                        $sql = mysql_query($query)  or die( mysql_error());
                        while($result = mysql_fetch_array($sql)){
                            
                            //MAKE IT PURTY!
                            if($switch==1){$class = "level1";}else{$class="level2";}
                            $switch *=-1;
                            
                            //LOAD QUEST INFO
                            $quest = quest($result['quest']);
                            
                            //DISPLAY TABLE
                            echo "<tr><td class=\"$class\"><a href=\"quest_recieve.php?quest=".$quest['entry']."\">".$result['quest']."</a></td>";
                            echo "<td class=\"$class\">".$quest['QuestLevel']."</td>";
                            echo "<td class=\"$class\"><a href=\"quest_recieve.php?quest=".$quest['entry']."\">".$quest['Title']."</a></td>";
                            echo "<td class=\"$class\">".substr($quest['Objectives'],0,40)."...</td>";
                            echo "</tr>";
                        }
                    ?>
            </table>
    </fieldset>
