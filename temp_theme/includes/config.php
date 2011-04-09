<?php
    /**
     * SERVER INFORMATION
     * */
    define('HOST'                       ,'localhost');                  
    define('USERNAME'                   ,'root');                      
    define('PASSWORD'                   ,'4179');
    define('SQL_AUTH_DATABASE'          ,'catauth');    
    define('SQL_WORLD_DATABASE'         ,'catworld');
    define('SQL_CHAR_DATABASE'          ,'catcharacters');
    define('SITE_ROOT'                  ,'http://localhost/t-cata/');
    
    /**
     * TRY TO CONNECT TO THE SERVER
     * */
    @mysql_connect(HOST,USERNAME,PASSWORD) or
        die("ERROR: I CANNOT CONNECT TO YOUR SERVER WITH THE FOLLOWING INFORMATION:<br/>
            Host: ".HOST."<BR/>Username: ".USERNAME.
            "<br/>Password: ".PASSWORD."<P/>
            Check your information in the INCLUDES/CONFIG.PHP file");
    
?>