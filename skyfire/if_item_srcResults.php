<?php
  
        //MAKE A USER DATA ARRAY FROM ANY POSSIBLE REQUEST(POST) 
        $userData = $_REQUEST;
        mysql_selectdb(SQL_WORLD_DATABASE);

        
        // START THE SQL STRING
        $query = "SELECT * FROM `item_template` WHERE ";
        foreach($userData as $searchName => $value){
        
            if($value       > "" &&
               $searchName != "submit" &&
               $searchName != "cookie" &&
               $searchName != "style_cookie" &&
               $searchName != "style" &&
               $searchName != "skyfire" &&
               $searchName != "PHPSESSID"){                
             echo($searchName."<br>");   
                //MOST EFFICIENT WAY TO SEARCH, HOWEVER RESULTS MAY VARY ON
                //ENTRY. TODO:MAKE ENTRY A SEPARATE QUERY
                
                if($searchName == "name"){
                    $query .= "`name` LIKE '%$value%' ORDER BY `name` ASC";    
                }else{
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
                        
