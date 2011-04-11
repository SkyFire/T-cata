<?php
    
?>
<div class="NavBox">
    <div class="NavHead"><div class="NavHeadTitle"><?php echo C_MNU_1;?></div></div>
        <div class="nav-menu">
            <ul>
                <li class="Level1"><a href="creature_search.php">New Search</a></a></li>
                <?php if(isset($_REQUEST['npc'])){?>
                    <li class="Level2"><a href="creature_search.php?npc=<?php echo $_REQUEST['npc'];?>">Creature Template</a></li>
                    <li class="Level1"><a href="creature_location.php?npc=<?php echo $_REQUEST['npc'];?>">Creature Location</a></li>
                    <li class="Level2"><a href="creature_modelid.php?npc=<?php echo $_REQUEST['npc'];?>">Model Info</a></li>
                    <li class="Level1"><a href="creature_equipment.php?npc=<?php echo $_REQUEST['npc'];?>">Equip Template</a></li>
                    <li class="Level2"><a href="creature_loot.php?npc=<?php echo $_REQUEST['npc'];?>">Creature Loot</a></li>
                    <li class="Level1"><a href=""><?php echo NOT_DONE;?> Picketpocket Loot</a></li>
                    <li class="Level2"><a href=""><?php echo NOT_DONE;?> Skin Loot</a></li>
                    <li class="Level1"><a href=""><?php echo NOT_DONE;?> Locales NPC Text</a></li>
                    <li class="Level2"><a href=""><?php echo NOT_DONE;?> Creature Movement Script</a></li>
                    <li class="Level1"><a href=""><?php echo NOT_DONE;?> NPC Vendor Template</a></li>
                    <li class="Level2"><a href=""><?php echo NOT_DONE;?> NPC Trainer Template</a></li>
                    <li class="Level1"><a href=""><?php echo NOT_DONE;?> Creature Template Addon</a></li>
                    <li class="Level2"><a href=""><?php echo NOT_DONE;?> Creature Addon</a></li>
                    <li class="Level1"><a href=""><?php echo NOT_DONE;?> NPC Gossip</a></li>
                    <li class="Level2"><a href=""><?php echo NOT_DONE;?> Creature Movement</a></li>
                    <li class="Level1"><a href="creature_onkill_reputation.php?npc=<?php echo $_REQUEST['npc'];?>">On Kill Reputation</a></li>
                    <li class="Level2"><a href="creature_involved_in.php?npc=<?php echo $_REQUEST['npc'];?>">Involved In</a></li>
                    <li class="Level1"><a href=""><?php echo NOT_DONE;?> Event AI</a></li>
                <?php }?>
            </ul>
        </div>
    <div class="NavFooter"></div>
</div>
