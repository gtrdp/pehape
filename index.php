<?php
//check whether the user is online
session_start();
include("database.php");
include("function.php");
$user_check = $_SESSION['login_user'];

if(isset($_SESSION['user']))
	page("dashboard");
else
	page("login");
