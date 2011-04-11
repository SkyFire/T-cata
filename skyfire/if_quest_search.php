

<form method="post">
    <fieldset>
        <legend>Search Criteria</legend>
        <center>
            <table>
                <tr><td><b >QuestId: </b></td><td><input type="text" name="questID"></td>
                <td><b >Quest Title:</b></td><td><input type="text" name="questTitle"></td></tr>
                <tr><td><b >Quest Giver:</b></td><td><input type="text" name="questGiver"></td>
                <td><b >Quest Taker:</b></td><td><input type="text" name="questTaker"></td></tr>
                <tr><td><b >prevQuestId:</b></td><td><input type="text" name="prevQuestID"></td>
                <td><b >nextQuestId:</b></td><td><input type="text" name="nextQuestID"></td></tr>
                <tr><td colspan="4" align="right"><input type="submit" value="Search" name="submit"></td></tr>
            </table>
        </center>
    </fieldset>
</form>

<!-- NEED THIS DUE TO THE SEARCH RESULTS OFF SETTING THE DIVS
    ITS ONE OR THE OTHER -->
    
<?php if (!isset($_POST['submit'])){echo "</div>";}?>    
</div><div class="CntFooter"></div></div></div>
        
                    
                
                <!--### END OF CONTENT STUFF -->
<?php
    
    if(isset($_POST['submit'])){
        ?>
         <div class="CntBox">
                    <div class="CntHead">
                        <div class="CntHeadTitle">Search Results</div>
                    </div>
                        
                        <div class="CntFiller">
                            <div class="CntInfo">
                                <?php
                                    $questID        = $_POST['questID'];
                                    $questTitle     = $_POST['questTitle'];
                                    $questGiver     = $_POST['questGiver'];
                                    $questTaker     = $_POST['questTaker'];
                                    $prevQuestID    = $_POST['prevQuestID'];
                                    $nextQuestID    = $_POST['nextQuestID'];
                    
                                    // SELECT WORLD DATABASE
                                    @mysql_selectdb(SQL_WORLD_DATABASE) or
                                        die("Unable to connecto to ".SQL_WORLD_DATABASE."<br/>".
                                            mysql_error());
            
                                    // START THE SQL STRING
                                    $sql = "SELECT * FROM quest_template WHERE ";
                                    if($questID > "")       {$sql .="entry='$questID'";}
                                    if($questTitle > "")    {$sql .="Title LIKE '%$questTitle%'";}
                                    if($nextQuestID > "")   {$sql .="NextQuestId='$nextQuestID'";}
                                    if($prevQuestID > "")   {$sql .="PrevQuestId='$prevQuestID'";}
                                    //if($questGiver > "")    {$sql ="SELECT * FROM creature_template WHERE name LIKE '%$questGiver%'";}
        
                                    //RUN THE QUERY
                                    $sql = @mysql_query($sql) or
                                    die("Bad Query:<br/>$sql<br/>".mysql_error());
            
                                    // LOOP THROUGH THE RESULTS
                                ?>
                                <table><tr>
                                    <td width="50">ENTRY</td><TD width="200">TITLE</TD><td >DETAILS</td></tr>
                                <?php
                                    while($result=mysql_fetch_array($sql)){
                                        echo "<tr><td ><a href=\"quest_recieve.php?quest=".$result['entry']."\">".$result['entry'].
                                        "</a></td><td><a href=\"quest_recieve.php?quest=".$result['entry']."\">".$result['Title'].
                                        "</a></td><td>".substr($result['Details'],0,80)."...</td></tr>";
                                    }
                                ?>
                                </tr></table>
                                
                        </div>
                    </div>
                <div class="CntFooter"></div>
            </div></div>
            <!--### END OF CONTENT STUFF -->
   <?php }// SUBMIT CHECK
?>
          
