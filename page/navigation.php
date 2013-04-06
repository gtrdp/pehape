<?php session_start(); if(isset($_SESSION['user'])): ?>
	<a href="tampilkan_data.php">Tampilkan Data</a>
	<br /><a href="input_data.php">Input Data</a>
	<br /><a href="logout.php">Log out</a><br />
<?php else: ?>
	<a href="index.php">Home</a>
	<a href="register.php">Registrasi</a>
<?php endif; ?>