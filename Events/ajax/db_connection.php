<?php

// Connection variables 
$host = "localhost"; // MySQL host name eg. localhost
$user = "citypastor"; // MySQL user. eg. root ( if your on localserver)
$password = "test123!@#"; // MySQL user password  (if password is not set for your root user then keep it empty )
$database = "citypastor"; // MySQL Database name

// Connect to MySQL Database 
$db = mysql_connect($host, $user, $password) or die("Could not connect to database");

// Select MySQL Database 
mysql_select_db($database, $db);

?>