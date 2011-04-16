<div class="NavBox">
    <div class="NavHead"><div class="NavHeadTitle"><?php echo Q_MNU_SUBMENU;?></div></div>
        <div class="nav-menu">
            <ul>
                <li class="Level2"><a href="quest_search.php"><?php echo Q_MNU_SEARCH;?></a></li>
                <?php
                    if(isset($_REQUEST['quest'])){?>
                        <li class="Level1"><a href="quest_recieve.php?quest=<?php echo $questID;?>"><?php echo Q_MNU_1;?></a></li>
                        <li class="Level2"><a href="quest_turnin.php?quest=<?php echo $questID;?>"><?php echo Q_MNU_2;?></a></li>
                        <li class="Level1"><a href="quest_giver.php?quest=<?php echo $questID;?>"><?php echo Q_MNU_3;?></a></li>
                        <li class="Level2"><a href="quest_taker.php?quest=<?php echo $questID;?>"><?php echo Q_MNU_4;?></a></li>
                        <!-- <li class="Level1"><a href="#">Link To Some Site Or Stats</a></li>--><?php
                    }?>
            </ul>
        </div>
    <div class="NavFooter"></div>
</div>