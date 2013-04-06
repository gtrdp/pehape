<table border="1">
	 		<tr>
	 			<th>No</th>
	 			<th>Penginput</th>
	 			<th>Komoditi</th>
	 			<th>Jumlah Panen</th>
	 			<th>Harga Per Kilo</th>
	 			<th>Total</th>
	 			<th>&nbsp;</th>
	 			<th>&nbsp;</th>
	 		</tr>
	 		<?php
	 			foreach ($data as $foo)
	 			{
					echo "<tr>";
					foreach ($foo as $bar)
					{
						echo "<td>".$bar."</td>";
					}
					echo "<td><a href=\"edit_data.php?id=".$foo["id"]."\">Edit</a></td>";
					echo "<td><a href=\"hapus_data.php?id=".$foo["id"]."\">Hapus</a></td>";
					echo "</tr>";
				}
	 		?>
</table>