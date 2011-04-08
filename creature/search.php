<?php

?>
    <table width="100%" style="border:1px;color:#c0c0c0;">
        <tr>
         
            <td>
                <form method="post">
                    <table class="resultsborder"><tr>
                        <td>Entry<br><input type="text" name="entry"></td>
                        <td>Name<br/><input type="text" name="name"></td>
                        <td>Subname<br/><input type="text" name="subname"></td>
                        </tr><tr>
                        <td align="right" colspan="3"><input type="submit" name="submit" value="Search"></td>
                    </tr></table>
                </form>
            </td>
        </tr>
    </table>
    <p/>
    <table width="100%"><tr>
        <td class="inputbox">Entry</td><td class="inputbox">Name</td><td class="inputbox">Subname</td><td class="inputbox">NpcFlag</td></tr>
        <?php
            mysql_selectdb(SQL_WORLD_DATABASE);
            if(isset($_POST['submit'])){
                if(isset($_POST['entry'])){$entry = $_POST['entry'];}
                if(isset($_POST['name'])){$name = $_POST['name'];}
                if(isset($_POST['subname'])){$subname = $_POST['subname'];}
                
                if($entry > ""){$sql = "SELECT * FROM creature_template WHERE entry=$entry";}
                if($name > ""){$sql = "SELECT * FROM creature_template WHERE name LIKE '%$name%'";}
                if($subname > ""){$sql = "SELECT * FROM creature_template WHERE subname LIKE '%$subname%'";}
                $counter = 1;
                $sql = mysql_query($sql) or
                    die("bad query<br>$sql<p/>".mysql_error());
                while($result = mysql_fetch_array($sql)){
                    $counter  *=-1;
                    if($counter == 1){
                        $td = "<td style=\"background-color:#c0c0c0;\">";
                    }else{
                        $td = "<td>";
                    }
                    echo "<tr>$td<a href=\"".SITE_ROOT."creature?npc=".$result['entry']."\">".$result['entry']."</a></td>$td".$result['name']."</td>$td$subname</td>$td".$result['npcflag']."<tr>";
                }
            }
        ?>
    </tr></table>