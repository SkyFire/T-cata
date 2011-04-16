<?php

?>
<fieldset>
    <legend>Search Criteria</legend>
        <table>
            <tr>
                <td>entry<br><input type="text" name="entry"></td>
                <td>name<br><input type="text" name="name"></td>
                <td>type<br><select name="type" >
                    <?php
                        foreach($object_type as $name=>$value)
                        {
                            echo "<option value=\"$value\">$name</option>";    
                        }
                    ?>
                    </select></td>
            </tr>
        </table>
</fieldset>