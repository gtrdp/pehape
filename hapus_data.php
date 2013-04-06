<?php
session_start();
include("database.php");
include("function.php");

if (isset($_SESSION['user']))
{
	
	if (isset($_GET["id"]))
	{
		$data = $_GET["id"];
		page("hapus", "", $data);
	}
	elseif(isset($_POST["id"]))
	{
		$id = $_POST["id"];
		//detele data
		$result = mysql_query("DELETE FROM data_pehape WHERE id = ".$id) or die(mysql_error());
		
		//display message
		page("success", "Data was successfully Deleted!");
	}
	else
	{
		page("error", "Required Parameters are missing!");
	}

}
else
	page("error", "No Direct Access is allowed!");
