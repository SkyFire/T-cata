<?php
    include('csessioncheck.php');
    
    
   
?>
<h1>UNDERCONSTRUCTION - NOT WORKING</h1>
<table cellspacing="0" cellpadding="3" width="100%" align="center" border="0">
  
  <tr>
    <td>creature I<br/>
        <table class="resultsborder" ><tr><td>
            <table>
                <tr>
                    <td>Entry<br><input type="text" name="entry" value="<?php echo $result['entry'];?>"></td>
                    <td>difficulty_entry_1<br><input type="text" name="difficulty_entry_1" value="<?php echo $result['difficulty_entry_1'];?>"></td>
                    <td>difficulty_entry_2<br><input type="text" name="difficulty_entry_2" value="<?php echo $result['difficulty_entry_2'];?>"></td>
                    <td>difficulty_entry_3<br><input type="text" name="difficulty_entry_3" value="<?php echo $result['difficulty_entry_3'];?>"></td>
                </tr><tr>
                    <td>KillCredit1<br><input type="text" name="killcredit1" value="<?php echo $result['KillCredit1'];?>"></td>
                    <td>KillCredit2<br><input type="text" name="killcredit1" value="<?php echo $result['KillCredit2'];?>"></td>
                    <td colspan="2">Name<br><input size="40" type="text" name="name" value="<?php echo $result['name'];?>"></td>
                </tr><tr>
                    <td colspan="2">subname<br><input type="text" name="subname" value="<?php echo $result['subname'];?>"></td>
                    <td colspan="2">IconName<br><input type="text" name="IconName" value="<?php echo $result['IconName'];?>"></td>
                </tr><tr>
                    <?php for($i=1;$i<=4;$i++){
                        echo '
                            <td>
                            modelid'.$i.'<br>
                            <input type="text"
                            name="modelid'.$i.'"
                            value="'.$result['modelid1'].'"</td>';
                    }?>
                </tr><tr>
                    <td>mingold<br><input type="text" name="mingold" value="<?php echo $result['mingold'];?>"></td>
                    <td>maxgold<br><input type="text" name="maxgold" value="<?php echo $result['maxgold'];?>"></td>
                    <td>minlevel<br><input type="text" name="minlevel" value="<?php echo $result['minlevel'];?>"></td>
                    <td>maxlevel<br><input type="text" name="maxlevel" value="<?php echo $result['maxlevel'];?>"></td>
                </tr><tr>
                    <td>Mana_mod<br><input type="text" name="Mana_mod" value="<?php echo $result['Mana_mod'];?>"></td>
                    <td>Health_mod<br><input type="text" name="Health_mod" value="<?php echo $result['Health_mod'];?>"></td>
                </tr>
        </table>       
                
          
          </td></tr></table></td>
    <td>
      <table class="resultsborder">
        
        <tr>
          <td>Creature II</td></tr></table></td></tr>
  <tr>
    <td>
      <table class="resultsborder">
        
        <tr>
          <td>loot
                <table class="resultsborder"><tr>
                    <td>lootid<br><input type="text" name="lootid" value="<?php echo $result['lootid'];?>"></td></tr><tr>
                    <td>pickpocketloot<br><input type="text" name="pickpocketloot" value="<?php echo $result['pickpocketloot'];?>"></td></tr><tr>
                    <td>skinloot<br><input type="text" name="skinloot" value="<?php echo $result['skinloot'];?>"></td></tr><tr>
                </tr></table>
          </td>
          <td>resistance
                <table class="resultsborder"><tr>
                    <?php for($i=1;$i<=3;$i++){
                        echo '
                            <td>resistance'.$i.'<br><input type="text" name="lootid'.$i.'" value="'.$result['resistance'.$i].'"></td>
                            <td>resistance'.($i+3).'<br><input type="text" name="lootid'.($i+3).'" value="'.$result['resistance'.($i+3)].'"></td>
                            </tr><tr>';
                    }?>
                </tr></table>
          
          </td></tr></table></td>
    <td>
      <table class="resultsborder">
        
        <tr>
          <td>Trainer</td>
          <td>Armor-Speed</td>
          <td>Behavior</td></tr></table></td></tr>
  <tr>
    <td>
      <table class="resultsborder">
        
        <tr>
          <td>quest items</td></tr></table>&nbsp;odds 
      and ends</td>
    <td>button goes 
here</td></tr></table></p>
</body>
</html>
        