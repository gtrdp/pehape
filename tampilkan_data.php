<?php
session_start();
include("database.php");
include("function.php");

if(isset($_SESSION['user']))
{

	
	$data = array();
	
	$sql = "SELECT
				d.id, u.nama, k.nama_komoditi, d.berat, d.harga, d.total
			FROM 
				data_pehape d
			JOIN
				komoditi k ON d.id_komoditi = k.id_komoditi
			JOIN
				user u ON d.id_user = u.id_user";
	$result = mysql_query($sql) or die(mysql_error());
	
	if (mysql_num_rows($result) > 0)
	{
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
			array_push($data, $row);
	}
	else {
		exit();
	}
	
	page("tampilkan", "", $data);
}
else
	page("error", "Direct access is not allowed!");

	