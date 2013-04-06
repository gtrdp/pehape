<?php

function page ($page, $message = "", $data = "")
{	
	switch ($page) {
		case 'dashboard':
			$title = "Dashboard";
			include("page/header.php");
			include("page/navigation.php");
			break;
		
		case "login":
			$title = "PHP - Login";
			include("page/header.php");
			include("page/navigation.php");
			include("page/login_page.php");
			break;
			
		case "input":
			$title = "Input Data";
			include("page/header.php");
			include("page/navigation.php");
			include("page/input.php");
			break;
		
		case "tampilkan":
			$title = "Data yang Tersimpan";
			include("page/header.php");
			include("page/navigation.php");
			include("page/tampilkan.php");
			break;
			
		case "edit":
			$title = "Edit Data";
			include("page/header.php");
			include("page/navigation.php");
			include("page/edit.php");
			break;
			
		case "hapus":
			$title = "Hapus Data";
			include("page/header.php");
			include("page/navigation.php");
			include("page/hapus.php");
			break;
		
		case "register":
			$title = "Registrasi";
			include("page/header.php");
			include("page/navigation.php");
			include("page/register_page.php");
			break;
			
		case "error":
			$title = "Ooops..!";
			include("page/header.php");
			include("page/navigation.php");
			break;
			
		case "success":
			$title = "Hurray..!";
			include("page/header.php");
			include("page/navigation.php");
			break;
			
		default:
			$title = "404 - Not Found!";
			include("page/header.php");
			include("page/navigation.php");
			break;
	}
	
	include("page/footer.php");
}

//END OF function.php