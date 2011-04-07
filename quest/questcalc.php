<h2>QUESTFLAG CALCULATOR</h2>
<a style="font-variant:small-caps;">Hold CTRL key to make multiple selections</a>
<form method="post">
    
    <table>
        <tr>
            <td>
                <?php
                $counter=1;
                include('config.php');?>
                <select name="qflags[ ]" multiple=multiple >
                    <?php for($i=1;$i<=19;$i++){?>
                        <option value="<?php echo $counter;?>"><?php echo $questflags[$i];?></option>
                        <?php $counter = $counter + $counter; ?>
                    <?php }?>
                </select>
            </td>
        </tr>
        <tr>
        <td>
            <input type="submit" value="Calc" name="submit">
        </td>
        </tr>
    </table>
</form>
<?php
    $counter=0;
    if(isset($_REQUEST['submit'])){
               
        $qflags= $_POST['qflags'];
        if( is_array($qflags)){
            while (list ($key, $val) = each ($qflags)) {
                $counter +=$val;
            }
        }//else{echo "not array";} 
    }
?>
<p/>
QuestFlags <input type="text" value="<?php echo $counter;?>">