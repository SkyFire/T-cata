<?php
    include('../menu.php');
    include('../includes/functions.php');
    include('qsessioncheck.php');
    include('loadqtable.php');
?>
<html>
    <head>
        <link rel="stylesheet" href="../scripts/tcata.css" type="text/css">   
    </head>
    <body>
        <center>
         <table  border="0" cellpadding="5" cellspacing="0">
            <tr>
                <td class="qsubmenu" valign="top">
                    <?php include('QuestSubMenu.php');?>
                </td>
                 <td valign="top" align="left" width="600">
                    <?php include('quest1.php');?>
                </td>
            </tr>
         </table>
        </center>
    </body>
</html>