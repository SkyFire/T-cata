<?php
    session_start();
    include('menu.php');
    include('questmenu.php');
?>
<html>
    <head>
        <link rel="stylesheet" href="tcata.css" type="text/css">   
    </head>
    <body>
        <center>
            
            
            <form method="post">
                <table><tr>
                    <td>
                        Quest ID:<br>
                        <input type="text" name="questID">
                    </td>
                    <td>
                        Quest Title:<br/>
                        <input type="text" name="questTitle">
                    </td>
                    <td colspan="3" align="right">
                        <input type="submit" value="Search" name="submit">
                    </td></tr><tr>
                    <td>
                        Quest Giver:<br/>
                        <input type="text" name="questGiver" >
                    </td>
                    <td>
                        Quest Taker:<br/>
                        <input type="text" name="questTaker">
                    </td>
                    <td>
                        Previous Quest ID:<br/>
                        <input type="text" name="prevQuestID">
                    </td>
                    <td>
                        Next Quest ID:<br/>
                        <input type="text" name="nextQuestID">
                    </td>
                    <td align="right">
                        <input type="reset" value="Clear">
                    </td>
                    </tr></table>
            </form>
            
        </center>
    </body>
</html>
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
        <td width="50">ENTRY</td><TD width="200">TITLE</TD><td>DETAILS</td></tr>
        <?php
            while($result=mysql_fetch_array($sql)){
                echo "<tr><td><a href=\"quest1.php?id=".$result['entry']."\">".$result['entry']."</td><td>".$result['Title'].
                "</td><td>".substr($result['Details'],0,80)."...</td></tr>";
            }
        ?></tr></table></center><?php
        die();
    }// SUBMIT CHECK
?>
