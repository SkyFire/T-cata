<?php
    
    // LOAD A BASIC LANG SCRIPT
    include('lang/en.php');    
    include('include/config.php');   
	include('include/functions.php');
	mysql_selectdb(SQL_WORLD_DATABASE);

    
     $id = $_REQUEST['npc'];
     $npc = creature($_REQUEST['npc']);
    
	
	//DID USER SUBMIT? 
    if(isset($_POST['submit'])){
       
	   $quest_change 					= $_POST['questid'];
	   $quest_method 					= $_POST['questmethod'];
	   $quest_delete 					= 0;
	   
	   if(isset($_POST['delete'])){$quest_delete = 1;}
	   
	   //ADDING QUEST
	   if($quest_delete == 0){
	   
			switch ($quest_method){
				case "giver":
					$sql = "INSERT INTO `creature_questrelation` (`id`,`quest`) VALUES ($id,$quest_change)";					
					break;
				case "taker":
					$sql = "INSERT INTO `creature_involvedrelation` (`id`,`quest`) VALUES ($id,$quest_change)";
					break;
				default:
					die("Quest Update Error");
					break;
			}//END SWITCH
			
			
			
	   }else{
		
			switch ($quest_method){
				case "giver":
					$sql = "DELETE FROM `creature_questrelation` (`id`) VALUES ($id)";					
					break;
				case "taker":
					$sql = "DELETE FROM `creature_involvedrelation` (`id`) VALUES ($id)";
					break;
				default:
					die("Quest Deletion Error");
					break;
			}//END SWITCH
			
			
	   }//DELETE ?
	   
	   //RUN THE QUERY
		$query = mysql_query($sql) or die("Bad Query creature involved in<br>$sql<br/>".mysql_error());
		
		//EXPORT TO TEXT FILE
		saveSQL($sql,"creature_involed_updates.sql");
	   
	   
    }//SUBMIT
	
    $questrel = mysql_query("SELECT * FROM creature_questrelation WHERE id=".$id) or die(mysql_error());
    
    $questinv = mysql_query("SELECT * FROM creature_involvedrelation WHERE id=".$id) or die(mysql_error());
    
   
?>
<html>
    <head>
	<title><?php echo SITE_TITLE;?></title>
	<link href="vision.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="t-cata.js"></script>
	</head>

    <body>
    <div id="wrapper">
        <div id="header">

        </div>
        
        <!--### TOP MENU -->
        <div id="menu">
            <?php include('topmenu.php');?><div class="clearL"></div>
        </div>
        <!--### END TOP MENU -->


        <div id="container">
            
            <!--### LEFT COLUMN ###-->
            <div id="col-l">


                 <!--### SOME CONTENT CRAP
                                ADD THESE "CNTBOX" FOR ADDING SECTIONS -->
                <div class="CntBox">
                    <div class="CntHead"><div class="CntHeadTitle">
						Quest that <span class="npcNames">
							<?php echo $npc['name'];?></span> (NPC:<?php echo $npc['entry'];?>) is involved in</div></div>
                        <div class="CntFiller">
                            <div class="CntInfo">
								<?php echo PAGE_TEST_WARNING;?><br/>
                             Note: NPC's of CATACLYSM are no longer single. They share the same name, <strong><i>but not the same ID</i></strong>. Use
							 caution when deleting and assigning quest - Some server other purposes aside from quest.
							 <p/>Example:<span class="npcNames"><?php echo $npc['name'];?></span> is assigned these ID's as well:<br>
							 
							 <?php
								$idcheck = mysql_query("SELECT * FROM creature_template WHERE name LIKE '%".$npc['name']."%'");
								while($dupenpc = mysql_fetch_array($idcheck)){
									if($dupenpc['entry'] != $npc['entry']){
										echo "<a href=\"creature_search.php?npc="
										.$dupenpc['entry']."\">"
										.$dupenpc['entry']."</a>, ";
									}
								}
								include('if_creature_involved_in.php');
							?>
                               
                            </div>
                        </div>
                        <div class="CntFooter"></div>
                    </div></div>    
                           
                <!--### END OF CONTENT STUFF -->
                <!--### RIGHT COLUMN -->
                <div id="col-r">

                    <?php include('creature_submenu.php');?>
                    <?php include('calc_mnu.php');?>

                </div>  
                
            <div class="clearB"></div>

            <div id="footer">
                <div id="ft-Info">
                    <?php include('footer.php');?>
                </div>
            </div>
        
    
        </div>
        <!--### END OF CONTAINER ###-->
    </body>
</html>