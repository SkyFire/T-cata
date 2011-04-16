<?php
    if (isset($_REQUEST['submit'])){
        if(isset($_REQUEST['skyfire'])){
            $month = 60*60*24*30*time();
            setcookie("skyfire","skyfire",$month);
            header('location:skyfire');
        }
    }
    if(isset($_COOKIE['skyfire'])){
        header('location:skyfire');
        die();
    }
    
?>
<center><h2>World of Warcraft<sup>PS*</sup> PHP DB EDITORS</h2>
    <P>
        <p><a href="skyfire">SKYFIRE EMU</a><br/>
        <small>
            (visit <a href="http://www.projectskyfire.org">Project SkyFire for more information</a>)
        </small>
    </p>
        <a href="mangos">MANGOS</a><br/>
        (visit <a href="http://www.getmangos.com">Get Mangos</a>)
        
        
        <p/>
										<form method="post">
											<fieldset style="width:300px;">
												<legend>Settings</legend>
                                                <div align="left">
										Settings:<br/>
										<input type="checkbox" name="skyfire" value="skyfire">Take me to SKYFIRE DB Editor always<br/>
										<br/>
										<input type="submit" name="submit" value="Save Settings">
                                                </div>
											</fieldset>
										</form>
        
</center>
<sup>PS*</sup><small>Private Servers</small>