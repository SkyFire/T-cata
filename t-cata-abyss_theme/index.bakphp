<?php
    include('menu.php');
    echo"<center>";
    if(substr(PHP_VERSION,0,1) == "5"){
        echo "Php v5+ Check: <font color='#00ff00'>PASS!</font><p/>";
    }else{
        die("Php v5+ Check: <font color='#ff0000'>FAIL!</font>
            <br>You must have Php v5 or better use use TCata!<p/>");
    }
    echo"</center>";
    
    //SEE IF CONFIG.PHP IS THERE, IF NOT ITS A NEW INSTALL - HELPEM OUT!
    if(!file_exists("includes/config.php")){
        header("location:includes/install.php");
    }
    
    //CHECK IF THIS FILE EXIST, IF SO SHOW THEM CREDITS
    if(file_exists("1strun.php")){
?>
<center>
    <h2>Thank You For Checkin' Out T'Cata!</h2>    


<span class="title">&nbsp;&nbsp;CREDITS:&nbsp;&nbsp;</span><BR>
<span class="tablefont"><p/>
    PHP Design and Creation<br/>
    R.Scorpio<p/>
    Cataclysm/Database Server Engine:<br/>
    <a href="http://projectskyfire.org" target="_blank">Project SkyFire</a>
    <br> (now if they can get that patch working)<p/>
    <br/>
    T'Cata Inspired by<br/>
    <a href="http://quice.indomit.ru" target="_blank">QUICE</a> MaNGOs Database Editor<p/>
    
    Dedicated to my son
    
    
    
<?php } ?>