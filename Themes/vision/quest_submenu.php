<div class="NavBox">
    <div class="NavHead"><div class="NavHeadTitle">Navigation Title</div></div>
        <div class="nav-menu">
            <ul>
                <li class="Level2"><a href="quest_search.php">New Search</a></li>
                <?php
                    if(isset($_REQUEST['quest'])){?>
                        <li class="Level1"><a href="quest_recieve.php?quest=<?php echo $questID;?>">What you need to recieve this quest</a></li>
                        <li class="Level2"><a href="#">Requirements for turning in this quest</a></li>
                        <li class="Level1"><a href="#">Who/What gives you this quest</a></li>
                        <li class="Level2"><a href="#">Who/Where do you turn this quest in at</a></li>
                        <!-- <li class="Level1"><a href="#">Link To Some Site Or Stats</a></li>--><?php
                    }
                ?>
            </ul>
        </div>
    <div class="NavFooter"></div>
</div>