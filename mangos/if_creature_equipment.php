<?php

?>
<form method="post">
<fieldset>
    <legend>Equipment Template</legend>
        <table>
            <tr>
                <td>entry<br/><input type="text" name="entry" value="<?php echo $result['entry'];?>"></td>
                <td>equipentry1<br/><input type="text" name="equipentry1" value="<?php echo $result['equipentry1'];?>"></td>
                <td>equipentry2<br/><input type="text" name="equipentry2" value="<?php echo $result['equipentry2'];?>"></td>
                <td>equipentry3<br/><input type="text" name="equipentry3" value="<?php echo $result['equipentry3'];?>"></td>
            </tr>
        </table>               
</fieldset>
<p/><div align="right"><input type="submit" name="submit" value="Update"></div>