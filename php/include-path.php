<?php

// Lynda - Creating Secure PHP Websites Ch3

// Perform all initialization here, in private

// Set constants to easily reference public 
// and private directories

// $_SERVER['DOCUMENT_ROOT']
// return: /home/user/public_html

// APP_ROOT return /home/user/public_html
define("APP_ROOT", dirname(dirname(__FILE__)));

// include folder manual, from outside public directory
define("INC_FOLDER", '/home/user/includes');

define("PRIVATE_PATH", APP_ROOT . "/private");
define("PUBLIC_PATH", APP_ROOT . "/public");

require_once(PRIVATE_PATH . "/passwords.php");
require_once(PRIVATE_PATH . "/db_connection.php");
require_once(PRIVATE_PATH . "/functions.php");