
    <form method="post">
        <table><tr>
            <td class="tablefont" >
                Quest ID:<br>
                <input class="inputbox" type="text" name="questID">
            </td>
            <td class="tablefont" >
                Quest Title:<br/>
                <input class="inputbox" type="text" name="questTitle">
            </td>
            </tr><tr>
            <td class="tablefont" >
                Quest Giver:<br/>
                <input class="inputbox" type="text" name="questGiver" >
            </td>
            <td class="tablefont" >
                Quest Taker:<br/>
                <input class="inputbox" type="text" name="questTaker">
            </td></tr><tr>
            <td class="tablefont" >
                Previous Quest ID:<br/>
                <input class="inputbox" type="text" name="prevQuestID">
            </td>
            <td class="tablefont" >
                Next Quest ID:<br/>
                <input class="inputbox" type="text" name="nextQuestID">
            </td>
            </tr><tr>
            <td colspan="4" align="right">
                <input class="inputbox" type="submit" value="Search" name="submit">
            </td>
        </tr></table>

<?php
    
    if(isset($_POST['submit'])){
        $questID        = $_POST['questID'];
        $questTitle     = $_POST['questTitle'];
        $questGiver     = $_POST['questGiver'];
        $questTaker     = $_POST['questTaker'];
        $prevQuestID    = $_POST['prevQuestID'];
        $nextQuestID    = $_POST['nextQuestID'];
        /*
        if(
           $questGiver  =="" &&
           $questID     =="" &&
           $questTaker  =="" &&
           $questTitle  =="" &&
           $prevQuestID =="" &&
           $nextQuestID ==""){
            header('location:quest.php');
            die();
        }// NULL CHECK
        */
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
        <center>
        <table width="800" class="resultsborder"><tr>
        <td width="50">ENTRY</td><TD width="200">TITLE</TD><td class="tablefont" >DETAILS</td></tr>
        <?php
            while($result=mysql_fetch_array($sql)){
                echo "<tr><td class=\"tablefont\" ><a href=\"quest1x.php?quest=".$result['entry']."\">".$result['entry']."</td><td class=\"tablefont\" >".$result['Title'].
                "</td><td class=\"tablefont\" >".substr($result['Details'],0,80)."...</td></tr>";
            }
        ?></tr></table></center><?php
        die();
    }// SUBMIT CHECK
?>
          