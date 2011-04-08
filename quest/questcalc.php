
<b class="qsubmenu" style="font-variant:small-caps;">QUESTFLAG CALCULATOR</b><br>
<small style="font-variant:small-caps;">Hold CTRL key to make multiple selections</small>
<form method="post">
    
    <table>
        <tr>
            <td >
                <?php
                $counter=1;
                include('config.php');?>
                <select name="qflags[ ]" multiple=multiple class="inputbox" size="6">
                    <?php for($i=1;$i<=20;$i++){?>
                        <option value="<?php echo $counter;?>"><?php echo $questflags[$i];?></option>
                        <?php $counter = $counter + $counter; ?>
                    <?php }?>
                </select>
            </td>
        </tr>
        <tr>
        <td>
            <input type="submit" value="Calc" name="calc">
        </td>
        </tr>
    </table>
</form>
<?php
    $counter=0;
    if(isset($_REQUEST['calc'])){
               
        $qflags= $_POST['qflags'];
        if( is_array($qflags)){
            while (list ($key, $val) = each ($qflags)) {
                $counter +=$val;
            }
        }//else{echo "not array";} 
    }
?>
<span class="qsubmenu">
Calculated QuestFlags <input type="text" value="<?php echo $counter;?>">
</span>
