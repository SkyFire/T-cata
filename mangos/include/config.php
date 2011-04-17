<?php
    /**
     * SERVER INFORMATION
     * */
    define('HOST'                       ,'localhost');                  
    define('USERNAME'                   ,'root');                      
    define('PASSWORD'                   ,'4179');
    define('SQL_AUTH_DATABASE'          ,'realmd');    
    define('SQL_WORLD_DATABASE'         ,'mangos');
    define('SQL_CHAR_DATABASE'          ,'catcharacters');
    define('SQL_SCRIPTDEV2_DATABASE'    ,'scriptdev2');
    
    
    /**
     * TRY TO CONNECT TO THE SERVER
     * */
    @mysql_connect(HOST,USERNAME,PASSWORD) or
        die("ERROR: I CANNOT CONNECT TO YOUR SERVER WITH THE FOLLOWING INFORMATION:<br/>
            Host: ".HOST."<BR/>Username: ".USERNAME.
            "<br/>Password: ".PASSWORD."<P/>
            Check your information in the INCLUDES/CONFIG.PHP file");
    
?>