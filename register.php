<?php
session_start();
include("database.php");
include("function.php");

if (!isset($_SESSION['user']))
{
	//check whether the registration data is being sent
	if (isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["confpassword"]))
	{
		$nama = $_POST["nama"];
		$username = $_POST["username"];
		$alamat = $_POST["alamat"];
		$noktp = $_POST["noktp"];
		$password = $_POST["password"];
		$confpassword = $_POST["confpassword"];
		$message ="";
		
		//check whether username exist and/or password doesn't match
		$result = mysql_query("SELECT `id_user` FROM `user` WHERE `username` LIKE '$username'");
		if (mysql_num_rows($result) == 1)
			$message .= "Username sudah dipakai, silakan pilih username lain! <br />";
		if ($password != $confpassword)
			$message .= " Password tidak cocok, harap cek pengetikan anda!";
		
		if ($message != "")
		{
			$data = array();
			array_push($data, $nama, $username, $alamat, $noktp, $password, $confpassword);
			
			page("register", $message, $data);
		}
		else
		{
			$sql = "INSERT INTO
					user(username, password, nama, alamat, noktp)
					VALUES('$username', '". md5($password) ."', '$nama', '$alamat', '$noktp')";
    		$result = mysql_query($sql) or die(mysql_error());
			
			page("success", "Registrasi berhasil! Silakan login melalui Home.");
		}
	}
	else
	//else show registration form
	page("register");
}
else
	page("error", "You are already registered!");
