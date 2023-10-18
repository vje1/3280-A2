<?php

// MAKE SURE TO PUT THE REQUIRED DEFINITIONS HERE
define("ITEM_COST", 25);
define("WRAP_COST", 10);
define("DISCOUNT", 0.15);
define("TAX", 0.12);

// DECLARE THE ASSOCIATIVE ARRAY SHIPPING COST

$shippingCost = array("regular"=>6, "express"=>15, "priority"=>25);

// SETUP THE LOG FILE DEFINITION AND SETTINGS

define("LOGFILE","log/error_log.txt");
ini_set("log_errors", TRUE);
ini_set("error_log", LOGFILE);


?>