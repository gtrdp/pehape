	<p>Jika anda yakin ingin menghapus data, silakan tekan hapus.</p>
	<form name="input" action="hapus_data.php" method="post">
	 	<input type="hidden" value="<?php echo $data; ?>" name="id" />
		<input type="submit" value="Hapus!">
	</form>