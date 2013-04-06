<?php
//connect to database
session_start();
include('database.php');
include("function.php");

if(isset($_SESSION['user']))
{
// check for required fields
if (isset($_POST['ttanam']) && isset($_POST['tpanen']) && isset($_POST['komoditi']) && isset($_POST['harga']) && isset($_POST['berat']))
{
 
    $ttanam = $_POST['ttanam'];
    $tpanen = $_POST['tpanen'];
	$komoditi = $_POST['komoditi'];
	$id_user = $_SESSION["user"];
	$harga = $_POST['harga'];
	$berat = $_POST['berat'];
	$total = $harga * $berat;
	
	
	//check whether the komoditi exists
	$result = mysql_query("SELECT `id_komoditi` FROM `komoditi` WHERE `nama_komoditi` LIKE '$komoditi'");
	if (mysql_num_rows($result) == 1)
	{
		//the komoditi doesnt exist
		//so just insert komoditi value as is registered on komoditi table
		$foo = mysql_fetch_array($result);
		$sql = "INSERT INTO data_pehape(id_user, ttanam, tpanen, id_komoditi, harga, berat, total)
				VALUES('$id_user', '$ttanam', '$tpanen',".$foo["id_komoditi"].", $harga, $berat, $total)";
    	$result = mysql_query($sql) or die(mysql_error());
	}
	else
	{
		//the komoditi doesn't exist
		//so, insert new komoditi value
		$result = mysql_query("INSERT INTO komoditi(nama_komoditi) VALUES('$komoditi')") or die(mysql_error());
		$result = mysql_query("SELECT `id_komoditi` FROM `komoditi` WHERE `nama_komoditi` LIKE '$komoditi'");
		$foo = mysql_fetch_array($result);
		
		//insert the value to data table
		$sql = "INSERT INTO data_pehape(id_user, ttanam, tpanen, id_komoditi, harga, berat, total)
				VALUES('$id_user', '$ttanam', '$tpanen',".$foo["id_komoditi"].", $harga, $berat, $total)";
    	$result = mysql_query($sql) or die(mysql_error());
	}
	
    if ($result)
    	page("success", "Data Successfully Inserted!");
    else
    	page("error", "Something got wrong T.T");
} else {
	page("input");
}

}
else
 page("error", "No Direct Access is allowed!");
