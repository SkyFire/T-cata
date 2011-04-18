<?php
    
?>
<div class="NavBox">
    <div class="NavHead"><div class="NavHeadTitle"><?php echo I_MNU_1;?></div></div>
        <div class="nav-menu">
            <ul>
                <li class="Level1"><a href="item_search.php">New Search</a></a></li>
                <?php if(isset($_REQUEST['item'])){?>
                    <li class="Level2"><a href="item_template.php?item=<?php echo $_REQUEST['item'];?>">Item Template</a></li>
                    <li class="Level1"><a href="item_loot.php?item=<?php echo $_REQUEST['item'];?>"><?php echo NOT_DONE;?>Item Loot</a></li>
                    <li class="Level2"><a href="item_disenchant_loot.php?item=<?php echo $_REQUEST['item'];?>">Disenchant Loot</a></li>
                    <li class="Level1"><a href="item_prosp_loot.php?item=<?php echo $_REQUEST['item'];?>"><?php echo NOT_DONE;?>Prospecting Loot</a></li>
                    <li class="Level2"><a href="item_milling_loot.php?item=<?php echo $_REQUEST['item'];?>"><?php echo NOT_DONE;?>Milling Loot</a></li>
                    <li class="Level1"><a href="item_ref_loot.php"><?php echo NOT_DONE;?>Reference Loot</a></li>
                    <li class="Level2"><a href="item_enchant.php"><?php echo NOT_DONE;?> Enchantment</a></li>
                    <li class="Level1"><a href="item_looted_from.php"><?php echo NOT_DONE;?>Looted From</a></li>
                    <li class="Level2"><a href="item_involvedin.php"><?php echo NOT_DONE;?>Involved In</a></li>
                <?php }?>
            </ul>
        </div>
    <div class="NavFooter"></div>
</div>
