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

                
