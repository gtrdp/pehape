<?php

define('DB_USER', "root");
define('DB_PASSWORD', "root");
define('DB_DATABASE', "pehape");
define('DB_SERVER', "localhost");

//connect to database
$con = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die(mysql_error());
$db = mysql_select_db(DB_DATABASE) or die(mysql_error()) or die(mysql_error());