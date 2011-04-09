<?php
    if(isset($_POST['submit'])){
        if(
           $_POST['host']                       =="" ||
           $_POST['username']                   =="" ||
           $_POST['password']                   =="" ||
           $_POST['authserver']                 =="" ||
           $_POST['worldserver']                =="" ||
           $_POST['characters']                 =="" ||
           $_POST['siteroot']                   == ""
           ){
            echo "<font color='#ff0000'><b style=\"font-variant:small-caps;\">All Fields need to be entered</b></font>";
        }else{
            //USER SETTINGS
            $SqlVars[1]                         = $_POST['host'];
            $SqlVars[2]                         = $_POST['username'];
            $SqlVars[3]                         = $_POST['password'];
            $SqlVars[4]                         = $_POST['authserver'];
            $SqlVars[5]                         = $_POST['worldserver'];
            $SqlVars[6]                         = $_POST['characters'];
            $SqlVars[7]                         = $_POST['siteroot'];
            
            //SYSTEM SETTINGS
            $SqlInfo[1]                         = "%HOST%";
            $SqlInfo[2]                         = "%USERNAME%";
            $SqlInfo[3]                         = "%PASSWORD%";
            $SqlInfo[4]                         = "%AUTH%";
            $SqlInfo[5]                         = "%WORLD%";
            $SqlInfo[6]                         = "%CHAR%";
            $SqlInfo[7]                         = "%SITEROOT%";
            
            
            //FILE NAMES
            $configDist                         = "config.php.dist";
            $config                             = "config.php";
            
            //ARRAY COUNTER
            $i                                  = 1;
            
            //FIX THE URL INCASE THEY DIDNT READ AND FORGOT THE "/"
            if(substr($SqlInfo[7],strlen($SqlInfo[7],1)) != "/"){$SqlInfo[7] .= "/";}
            
            //PRCESS THE FILES MAKE A NEW CONFIG OUT OF DIST
            $oldFile = fopen($configDist,"r") or die("cannot open $configDist");
            $newFile = fopen($config,"w") or die("cannot open $config");
                
            while(!feof($oldFile)){
                //READ A LINE FROM THE OLD DATA
                $oldData = fgets($oldFile);
                
                //CHECK TO SEE IF IT HAS WHAT IM LOOKING FOR
                if(strstr($oldData,$SqlInfo[$i])){
                    //IF SO REPLACE SOME STRINGS
                    $newData = str_replace($SqlInfo[$i],$SqlVars[$i],$oldData);
                    //ADD IT TO THE NEW FILE
                    fputs($newFile,$newData);
                    //BUMP THE COUNTER
                    $i++;
                    
                    //GOOFY ERROR CHECK TODO: CHANGE TO 'FOREACH'
                    if($i==8){$i=7;}
                }else{
                    //NO MATCH, JUST WRITE THE OLD DATA FOUND
                    fputs($newFile,$oldData);    
                }// EO STRING MATCH
                
            }// LOOP THROUGH THE FILE (WHILE)
            
            //TEST NEW FILE
            include('config.php');
            ?>
            <center>
                <h2>
                    <font color="#00ff00">
                        New CONFIG.PHP file created successfully
                    </font>
                </h2>
                <?php
                    echo "<a href=\"".SITE_ROOT."\">Click here when ready</a>";
                    ?>
            </center>
            <?php
            //STOP SCRIPT HERE - WE'RE DONE
            die();
        }// EO NOT NULL BLOCK
    }//SUBMIT
?>
<html>
    <head>
        <title>T'CATA: CATACLYSM DATABASE EDITOR - INSTALLER</title>
    </head>
    <body marginwidth="0" marginheight="0">
        <center>
        <table width="500">
            <tr>
                <td>
                    <div align="justify">
                        <H3>T'CATA NEW INSTALL</H3>
                        If you are seeing this page, it is most likley this is your first time using TCATA! 
                        Fill in the information below. This will create your config.php which is located
                        in the includes folder (everything is pretty self explanitory)<P>
                        <i>NOTE: You can skip this part if you like, and just edit the config.php 
                        (currently called config.php.dist so you will also have to rename it)yourself. This
                        is just for convience.</i>
                        
                        <form method="post">
                        
                        <table>
                            <tr><td>Host/Server<br><input type="text" name="host"></td>
                            <td>Sql UserName:<br><input type="text" name="username"></td>
                            <td>Sql Password:<br><input type="text" name="password"></td>
                        </tr><tr>
                            <td>Auth Server Database<br/><input type="text" name="authserver"></td>
                            <td>World Server Database<br/><input type="text" name="worldserver"></td>
                            <td>Characters Database<br/><input type="text" name="characters"></td>
                        </tr><tr>
                            <td colspan="3">Website URL domain & folder(inc "/")<br/><input size="50" type="text" name="siteroot" value="http://localhost/t-cata/">
                            &nbsp;<p align="right" /><input type="submit" name="submit" value="Create CONFIG.PHP"></p>
                            </td>
                        </tr>
                        </table>
                    </form>
                    </div>
                </td>
            </tr>
        </table>
        </center>
    </body>
</html>

