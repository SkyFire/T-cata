<?php
    include('../menu.php');
    include('qsessioncheck.php');
    include('loadqtable.php');
?>
<html>
    <head>
        <link rel="stylesheet" href="../scripts/tcata.css" type="text/css">   
    </head>
    <body>
        <center>
         <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>                 
                <td class="qsubmenu" valign="top">
                    <?php include('QuestSubMenu.php');?>
                </td>
                 <td valign="top" align="left" >                
                    <?php include('quest2.php');?>
                 </td>                
            </tr>
         </table>
        </center>
    </body>
</html>