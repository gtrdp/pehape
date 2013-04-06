<form action="login.php" method="post">
	<label>Username :</label>
	<input type="text" name="username"/><br />
	
	<label>Password :</label>
	<input type="password" name="password"/><br/>
	
	<input type="submit" value=" Submit "/><br />
	<?php echo $error; ?>
</form>