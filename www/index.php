<?php

#This would echo the file directory inside your App folder(/vagrant)
#echo dirname(__dir__);
#echo dirname(dirname(__FILE__));

#Define app path.
define("APP_PATH", dirname(dirname(__FILE__)));
#echo APP_PATH;

#echo $_SERVER['REQUEST_URI']

#database
require APP_PATH."/controller/db.php";

#load Controller
require APP_PATH."/controller/controller.php";

#run the router.php file inside the Routes folder
require APP_PATH."/routes/router.php";






?>
