<?php
    $quest_id                       = $_POST['questID'];
    $quest_title                    = $_POST['questTitle'];
    $quest_giver                    = $_POST['questGiver'];
    $quest_taker                    = $_POST['questTaker'];
    $prev_quest_id                  = $_POST['prevQuestID'];
    $next_quest_id                  = $_POST['nextQuestID'];
    
                    
    // SELECT WORLD DATABASE
    mysql_selectdb(SQL_WORLD_DATABASE);
    
            
    // START THE SQL STRING
    $sql = "SELECT * FROM quest_template WHERE ";
    
    if($quest_id        > "")       {$sql .="entry ='$quest_id'";}
    if($quest_title     > "")       {$sql .="Title LIKE '%$quest_title%'";}
    if($next_quest_id   > "")       {$sql .="NextQuestId='$next_quest_id'";}
    if($prev_quest_id   > "")       {$sql .="PrevQuestId='$prev_quest_id'";}
    //if($questGiver    > "")       {$sql ="SELECT * FROM creature_template WHERE name LIKE '%$questGiver%'";}
        
    //RUN THE QUERY
    $sql = @mysql_query($sql) or
            die("Bad Query:<br/>$sql<br/>".mysql_error());
            
    // LOOP THROUGH THE RESULTS
?>
<fieldset>
    <legend>Search Results</legend>
    
        <table>
            <tr>
                <td width="50">ENTRY</td><TD width="200">TITLE</TD><td >DETAILS</td>
            </tr>
                <?php
                    while($result=mysql_fetch_array($sql))
                    {
                        echo "<tr>
                                <td ><a href=\"quest_recieve.php?quest=".$result['entry']."\">".$result['entry']."</a></td>
                                <td><a href=\"quest_recieve.php?quest=".$result['entry']."\">".$result['Title']."</a></td>
                                <td>".substr($result['Details'],0,80)."...</td>
                            </tr>";
                    }
                ?>
        </table>
</fieldset>