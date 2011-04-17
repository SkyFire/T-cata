<?php

?>
<form method="post">
<center>
    <fieldset>
        <legend>Creature Search</legend>
            
            <table>
                <tr>
                    <td>Entry</td>      <td><input type="text" name="entry">        </td>
                    <td>Name</td>       <td><input type="text" name="name">         </td>
                </tr><tr>
                    <td>SubName</td>    <td><input type="text" name="SubName">      </td>
                    <td>npcflag</td>    <td><input type="text" name="npcflag">      </td>
                </tr><tr>
                    <td>KillCredit1</td><td><input type="text" name="KillCredit1">  </td>
                    <td>KillCredit2</td><td><input type="text" name="KillCredit2">  </td>
                </tr>
            </table>
           
    </fieldset>
     </center>
<p/><div align="right"><input type="submit" name="search" value="Search" class="inputbtn"></div>     

</form>
<?php
    
    if(isset($_POST['search']))
    {
        $entry                  = $_POST['entry'];
        $name                   = $_POST['name'];
        $subname                = $_POST['SubName'];
        $npcflag                = $_POST['npcflag'];
        $killcredit1            = $_POST['KillCredit1'];
        $killcredit2            = $_POST['KillCredit2'];
                    
        // SELECT WORLD DATABASE
        mysql_selectdb(SQL_WORLD_DATABASE);
            
        // START THE SQL STRING
        $sql = "SELECT * FROM creature_template WHERE ";
        if($entry > "")         {$sql .="entry='$entry'";}
        if($name > "")          {$sql .="name LIKE '%$name%'";}
        if($subname > "")       {$sql .="SubName LIKE '%$subname%'";}
        if($killcredit1 > "")   {$sql .="KillCredit1='$killcredit1'";}
        if($killcredit2 > "")   {$sql .="KillCredit2='$killcredit2'";}
        
        //RUN THE QUERY
        $sql = @mysql_query($sql) or
            die("Bad Query:<br/>$sql<br/>".mysql_error());
            
        // LOOP THROUGH THE RESULTS
        ?>
        <fieldset>
            <legend>Search Results</legend>
                <table cellpadding="5" cellspacing="0"><tr>
                    <td>ENTRY</td><TD>NAME</TD><td >SUBNAME</td>
                        <td>npcflag</td><td>KillCredit1</td><td>KillCredit2</td>
                    </tr>
                    <?php
                    $class = "level1"; $level = 1;
                    while($result=mysql_fetch_array($sql)){
                        if ($level == -1){$class = "level2";} else {$class = "level1";}
                        echo "<tr>
                                <td class=\"$level\"><a href=\"creature_template.php?npc=".$result['entry']."\">".$result['entry']."</a></td>
                                <td class=\"$level\"><a href=\"creature_template.php?npc=".$result['entry']."\">".$result['name']."</a></td>
                                <td class=\"$level\">".$result['subname']."</td>
                                <td>".$result['npcflag']."
                                </td><td class=\"$level\">".$result['KillCredit1']."</td>
                                </td><td class=\"$level\">".$result['KillCredit2']."</td>
                            </tr>";
                        $level *= -1;
                    }?>
                    </tr>
                </table>
        </fieldset>
                        
   <?php } ?>
