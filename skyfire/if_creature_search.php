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
<div align="right"><input type="submit" name="search" value="Search"></div>     

</form>
<?php
    
    if(isset($_POST['search'])){
        ?>
         <div class="CntBox">
            <div class="CntHead">
                <div class="CntHeadTitle">Search Results</div>
                    </div>
                        <div class="CntFiller">
                            <div class="CntInfo">
                                <?php
                                
                                    $entry                  = $_POST['entry'];
                                    $name                   = $_POST['name'];
                                    $subname                = $_POST['SubName'];
                                    $npcflag                = $_POST['npcflag'];
                                    $killcredit1            = $_POST['KillCredit1'];
                                    $killcredit2            = $_POST['KillCredit2'];
                    
                                    // SELECT WORLD DATABASE
                                    @mysql_selectdb(SQL_WORLD_DATABASE) or
                                        die("Unable to connecto to ".SQL_WORLD_DATABASE."<br/>".
                                            mysql_error());
            
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
                                <table cellpadding="5"><tr>
                                    <td>ENTRY</td><TD>NAME</TD><td >SUBNAME</td>
                                    <td>npcflag</td><td>KillCredit1</td><td>KillCredit2</td>
                                </tr>
                                <?php
                                    while($result=mysql_fetch_array($sql)){
                                        echo "<tr><td ><a href=\"creature_search.php?npc=".$result['entry']."\">".$result['entry'].
                                        "</a></td><td><a href=\"creature_search.php?npc=".$result['entry']."\">".$result['name'].
                                        "</a></td><td>".$result['subname']."</td><td>".$result['KillCredit1'].
                                        "</td><td>".$result['KillCredit2']."</td></tr>";
                                    }
                                ?>
                                </tr>
                                </table>
                        </div>
                    </div>
                <div class="CntFooter"></div>
            </div></div>
            <!--### END OF CONTENT STUFF -->
            
   <?php } ?>
