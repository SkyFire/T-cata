<?php

?>
<form method="post">
<fieldset>
    <legend>Model Information</legend>
        <table>
            <tr>
                <td>modelid</td><td><input type="text" name="modelid" value="<?php echo $result['modelid'];?>"></td>
                <td>bounding_radius</td><td><input type="text" name="bounding_radius" value="<?php echo $result['bounding_radius'];?>"></td>
                <td>combat_reach</td><td><input type="text" name="combat_reach" value="<?php echo $result['combat_reach'];?>"></td>
            </tr><tr>
                <td>gender</td><td><input type="text" name="gender" value="<?php echo $result['gender'];?>"></td>
                <td>modelid_other_gender</td><td><input type="text" name="modelid_other_gender" value="<?php echo $result['modelid_other_gender'];?>"></td>
                <td><!-- future use --></td><td><!-- future use--></td>
            </tr>
        </table>
</fieldset>
<p/><div align="right"><input type="submit" name="submit" value="Update" class="inputbtn"></div>