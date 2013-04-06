<?php
session_start();
include("database.php");
include("function.php");

// username dan password dikirim dari Form
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$myusername = mysql_real_escape_string($_POST['username']);
	$mypassword = md5($_POST['password']);
	
	$sql = "SELECT id_user FROM user WHERE username = '$myusername' and password = '$mypassword'";
	$result = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_array($result, MYSQL_ASSOC);
	$count = mysql_num_rows($result);
	
	// Jika hasil sesuai $myusername dan $mypassword, table row must be 1 row
	if($count == 1)
	{
		session_register("loggedin");
		$_SESSION['user'] = $row["id_user"];
		header("Location: index.php");
	}
	else
	{
		page("login", "Username atau password Anda tidak sesuai");
	}
}
else {
	page("error", "Direct access is not allowed!");
}