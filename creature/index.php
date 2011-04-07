<?php
    session_start();
    include('../menu.php');
    include('../includes/functions.php');
    if(isset($_REQUEST['npc'])){
        $creatureID = $_REQUEST['npc'];
        
        //LOAD SOME CREATURE STUFF
        include('loadctable.php');
    }
?>
<html>
    <head>
        <title><?php echo $result['name'];?></title>
         <link rel="stylesheet" href="../scripts/tcata.css" type="text/css">   
    </head>
<body>
<center>
<table  border="0">
    <tr>
        <td class="qsubmenu" valign="top">
            <?php include('submenu.php');?>
        </td>
        <td valign="top">
            <?php
                if(isset($_REQUEST['npc'])){
                    
                    //IF THEY ARE COMING FROM ELSEWHERE
                    include('creature_template.php');
                    
                }else{
                    
                    //OTHERWISE FIRST CLICK HERE
                    include('search.php');
                }
            ?>
        </td>
    </tr>
</table>
</center>