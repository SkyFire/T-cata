<?php
    
    include('menu.php');
?>
 <ul>
            <li><a href="<?php echo SITE_ROOT;?>">Home</a></li>
            <li><a href="quest_search.php" id="current">Quest</a></li>
            <li><a href="creature_search.php">Creature</a></li>
            <li><a href="item_search.php">Items</a></li>
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
      <h1>Quest Search Page</h1>
      <fieldset >
        <legend>Search Criteria</legend>
      <form method="post">
        <center>
        <table><tr>
            <td >Quest ID:<br><input type="text" name="questID"></td>
            <td >Quest Title:<br/><input type="text" name="questTitle"></td>
        </tr><tr>
            <td >Quest Giver:<br/><input type="text" name="questGiver" ></td>
            <td >Quest Taker:<br/><input type="text" name="questTaker"></td>
        </tr><tr>
            <td >Previous Quest ID:<br/><input type="text" name="prevQuestID"></td>
            <td >Next Quest ID:<br/><input type="text" name="nextQuestID"></td>
        </tr><tr>
            <td colspan="4" align="right"><input type="submit" value="Search" name="submit"></td>
        </tr></table>
      </form>
      </fieldset>
      
      <?php
    
    if(isset($_POST['submit'])){
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
        <p>
        <center>
            <fieldset>
                <legend>&nbsp;&nbsp;Search Results&nbsp;&nbsp;</legend>
        <table ><tr>
        <td width="50"><h3>ENTRY</h3></td><TD width="200"><h3>TITLE</h3></TD><td><h3>DETAILS</h3></td></tr>
        <?php
            while($result=mysql_fetch_array($sql)){
                echo "<tr><td><a href=\"quest_recieve.php?quest="
                .$result['entry']."\">".$result['entry']
                ."</td><td>".$result['Title'].
                "</td><td>".substr($result['Details'],0,80)."...</td></tr>";
            }
        ?></tr></table>
            </fieldset><?php
        die();
    }// SUBMIT CHECK
?>
      <div id="footer">
    </div>
  </div>
</div>
</body>
</html>
