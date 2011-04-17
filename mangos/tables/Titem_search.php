<?php
    include('include/arrays.php');    
?>

<form method="post">
    <fieldset>
        <legend>Search Criteria</legend>
        <center>
            <table>
                <tr>
                    <td>entry<br/>                <input type="text" name="entry"></td>
                    <td>name<br/>                 <input type="text" name="name"></td>
                </tr><tr>
                    <td>class<br/>                 <input type="text" name="class"></td>
                    <td>subclass<br/>              <input type="text" name="subclass"></td></tr>
                    <tr><td>quality<br/>
                        <select                                       name="quality">
                        <option value="" selected="selected"></option>    
                        <?php
                            foreach($item_quality as $qualityName => $value){
                                echo "<option value=\"$value\">$qualityName</option>";
                            }
                        ?>
                
                    </select>
                </td>
                <td>InventoryType<br/>
                    <select                                            name="InventoryType">
                        <option value="" selected="selected"></option>
                        <?php
                            foreach($inventory_type as $inventoryName => $value){
                                echo "<option value=\"$value\">$inventoryName</option>";
                            }
                        ?>
                
                        
                    </select>
                
                </td>
            </tr><tr>
                    <td>flags<br/>
                        <select                                         name="Flags">
                            <option value="" selected="selected"></option>
                            <?php
                            foreach($item_flags as $flagname => $value){
                                echo "<option value=\"$value\">$flagname</option>";
                            }
                        ?>
                
                        </select>
                    </td>
                    <td>itemlevel</br>
                        <input type="text"                              name="itemlevel">
                    </td>
                </tr>
            </table>
        </center>
    </fieldset>
    <p><div align="right"><input type="submit" value="Search" name="submit" class="inputbtn"></div>
</form>

<?php               
    //MAKE A USER DATA ARRAY FROM ANY POSSIBLE REQUEST(POST) 
    $userData = $_POST;
    mysql_selectdb(SQL_WORLD_DATABASE);

        
    // START THE SQL STRING
    $query = "SELECT * FROM `item_template` WHERE ";
    foreach($userData as $searchName => $value){
        
        if($value > "" &&  $searchName != "submit" ){                
            echo($searchName."<br>");   
                //MOST EFFICIENT WAY TO SEARCH, HOWEVER RESULTS MAY VARY ON
                //ENTRY. TODO:MAKE ENTRY A SEPARATE QUERY
                
                if($searchName == "name")
                {
                    $query .= "`name` LIKE '%$value%' ORDER BY `name` ASC";    
                }
                else
                {
                    $query .= "`$searchName` = $value ORDER BY `name` ASC";   
                }

        }// value > ""
        
    }//userdata loop
        
    //RUN THE QUERY
    $sql = mysql_query($query) or
            die("Bad Searc Query:<br/>$query<br/>".mysql_error());
            
    // LOOP THROUGH THE RESULTS
    ?>
    <table cellpadding="5">
        <tr>
            <td>ENTRY</td><TD>NAME</TD><td >CLS</td>
            <td>SUBCLS</td><td>QLTY</td><td>TYPE</td>
            <TD>FLAGS</TD><td>ITEMLVL</td>
        </tr>
        <?php
            while($result=mysql_fetch_array($sql)){
                echo "<tr>
                    <td ><a href=\"item_template.php?item=".$result['entry']."\">".$result['entry']."</a></td>
                    <td><a href=\"item_template.php?item=".$result['entry']."\">".$result['name']."</a></td>
                    <td>".$result['class']."</td>
                    <td>".$result['subclass']."</td>
                    <td>".$result['Quality']."</td>
                    <td>".$result['InventoryType']."</td>
                    <td>".$result['Flags']."</td>
                    <td>".$result['ItemLevel']."</td>
                </tr>";
                            
            } ?>
    </table>
                        