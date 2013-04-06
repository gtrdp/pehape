<?php
session_start();
include("database.php");
include("function.php");

if (isset($_SESSION['user'])){
	
if (isset($_GET["id"]))
{
	//there is a request to edit the data
	//get the data
	$id = $_GET["id"];
	
	$data = array();
	$result = mysql_query("SELECT * FROM data_pehape d JOIN komoditi k ON d.id_komoditi = k.id_komoditi WHERE d.id = ".$id) or die(mysql_error());
	
	if (mysql_num_rows($result) > 0)
	{
		$row = mysql_fetch_array($result, MYSQL_ASSOC);
		foreach ($row as $key => $value)
			$data[$key] = $value;
	}
	
	page("edit", "", $data);
}
elseif (isset($_POST['ttanam']) && isset($_POST['tpanen']) && isset($_POST['komoditi']) && isset($_POST['harga']) && isset($_POST['berat'])&& isset($_POST['id']))
{
	$id = $_POST['id'];
	$id_user = $_SESSION['user'];
	$ttanam = $_POST['ttanam'];
    $tpanen = $_POST['tpanen'];
	$komoditi = $_POST['komoditi'];
	$harga = $_POST['harga'];
	$berat = $_POST['berat'];
	$total = $harga * $berat;
	
	//check whether the komoditi exists
	$result = mysql_query("SELECT `id_komoditi` FROM `komoditi` WHERE `nama_komoditi` LIKE '$komoditi'") or die(mysql_error());
	if (mysql_num_rows($result) == 1)
	{
		//the komoditi exists
		$foo = mysql_fetch_array($result, MYSQL_ASSOC);
		
		$sql = "UPDATE data_pehape
				SET
					id_user = $id_user,
					ttanam = '$ttanam',
					tpanen = '$tpanen',
					id_komoditi = ".$foo["id_komoditi"].",
					harga = $harga,
					berat = $berat,
					total = $total
				WHERE id = $id";
				
    	$result = mysql_query($sql) or die(mysql_error());
	}
	else
	{
		//the komoditi doesn't exist
		//so, insert new komoditi value
		$result = mysql_query("INSERT INTO komoditi(nama_komoditi) VALUES('$komoditi')") or die(mysql_error());
		$result = mysql_query("SELECT `id_komoditi` FROM `komoditi` WHERE `nama_komoditi` LIKE '$komoditi'");
		$foo = mysql_fetch_array($result, MYSQL_ASSOC);
		
		//insert the value to data table
		$sql = "UPDATE data_pehape
				SET
					id_user = $id_user,
					ttanam = $ttanam,
					tpanen = $tpanen,
					id_komoditi = ".$foo["id_komoditi"]."
					harga = $harga,
					berat = $berat,
					total = $total
				WHERE id = $id";
    	$result = mysql_query($sql) or die(mysql_error());
	}
	
	page("success", "Data Successfully Edited!");
}
else
	page("error", "Required paramaters are missing!");

}
else
	page("error", "No Direct Access is allowed!");
