<?php
    
    include('../menu.php');
?>
<html>
    <head>
        <link rel="stylesheet" href="../scripts/tcata.css" type="text/css">   
    </head>
    <body>
        <center>
         <table  border="0" cellpadding="0" cellspacing="0">
            <tr>
                <table class="resultsborder"><tr>
                <td class="qsubmenu" valign="top" width="100"><?php include('QuestSubMenu.php');?></td>
                 <td valign="top" >
                    <?php include('QuestSearch.php');?>
                </td>
                </tr></table>
            </tr>
         </table>
        </center>
    </body>
</html>
