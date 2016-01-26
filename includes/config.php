<?php

/*
author: RK King
link: https://github.com/rkking

-This is config.php File of R Shortner. it contains all information about website Core.
*/

// MySQL connection information
define('MYSQL_USER', 'root');
define('MYSQL_PASS', 'password');
define('MYSQL_DB', 'rshortner');
define('MYSQL_HOST', 'localhost');

// MySQL tables of Urls
define('URL_TABLE', 'R_Urls');

// page title
define('PAGE_TITLE', 'R Shortner');

// whether use mod_rewrite or not 
define('REWRITE', false);

//urls that begin with these strings will be allowed
$allowed_protocols = array('http:', 'https:', 'mailto:');

// uncomment below line to skip the protocol check
// $allowed_procotols = array();

?>