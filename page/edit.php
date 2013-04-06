 	<form name="input" action="edit_data.php" method="post">
	 	<table>
		 	<tr>
		 		<td>Tanggal Tanam :</td>
		 		<td><input type="text" name="ttanam" value="<?php echo $data["ttanam"]; ?>"></td>
		 	</tr>
		 	<tr>
		 		<td>Tanggal Panen :</td>
		 		<td><input type="text" name="tpanen" value="<?php echo $data["tpanen"]; ?>"></td>
		 	</tr>
		 	<tr>
		 		<td>Nama Komoditi :</td>
		 		<td><input type="text" name="komoditi" value="<?php echo $data["nama_komoditi"]; ?>"></td>
		 	</tr>
		 	<tr>
		 		<td>Harga (Rupiah/KG) :</td>
		 		<td><input type="text" name="harga" value="<?php echo $data["harga"]; ?>"></td>
		 	</tr>
		 	<tr>
		 		<td>Berat Hasil Panen (KG) :</td>
		 		<td><input type="text" name="berat" value="<?php echo $data["berat"]; ?>"></td>
		 	</tr>
	 	</table>
	 	<input type="hidden" value="<?php echo $data["id"]; ?>" name="id" />
		<input type="submit" value="Submit">
	</form>