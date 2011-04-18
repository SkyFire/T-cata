<?php

    require('../init.php');
    include('arrays.php');
    
    $field_name     = $_REQUEST['field'];
    $array          = $_REQUEST['array'];
    $table          = $_REQUEST['table'];
    $where_clause   = $_REQUEST['wc'];
    $row_id         = $_REQUEST['ri'];
    
    switch ($array)
    {
        case 'classes':
            $array = $classes;
            break;
        case 'races':
            $array = $races;
            break;
        default:
            die("bug in switch calcl $array");
            break;
    }
    
    mysql_selectdb(SQL_WORLD_DATABASE);
    $query = "SELECT * FROM `$table` WHERE `$where_clause` = $row_id";
    $sql = mysql_query($query) or die("bad query<br>$query<br>".mysql_error());
    $result = mysql_fetch_array($sql);
    $calc_result = $result[$field_name];
    if ($calc_result == -1) { $calc_result = array_sum($array);}
    
    if(isset($_POST['calc']))
    {
        $calc_result = array_sum($_POST['race']);
        $result[$field_name] = $calc_result;
        if ($calc_result == array_sum($array)){$calc_result = -1;}
    }
    
?>
<form method="post">
<fieldset>
    <legend><?php echo $field_name;?> Value Calc</legend>
        Check off required settings then "CALC" for new value<br/>
        Current Value: <input type="text" name="result" value="<?php echo $calc_result;?>">
         <input type="submit" name="calc" value="Calc"><br/><br/>
        <table>
            <tr>
            <?php
                $check = $calc_result;
                if ($check == -1){$check = array_sum($array);}
                
                $row_cnt = 1;
                foreach($array as $field => $value){
                    echo "<td><input type=\"checkbox\" name=\"race[]\" value=\"$value\"";
                              
                    if($value <= $check)
                    {
                        echo " checked=\"checked\"";
                        $check -= $value;
                    }
                    
                    echo "/>$field</td>";
                    $row_cnt *= -1;
                    if($row_cnt == 1){echo "</tr><tr>";}
                }
            ?>
            </tr>
        </table>
</fieldset>
<p/>
</form>
