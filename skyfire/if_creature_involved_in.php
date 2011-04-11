<?php

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
                        while($result = mysql_fetch_array($questrel)){
                            
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
                        while($result = mysql_fetch_array($questinv)){
                            
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
