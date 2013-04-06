			<form action="register.php" method="post">
			<table>
				<tr>
					<td><label for="nama">Nama Lengkap</label></td>
					<td>:</td>
					<td><input type="text" class="text" name="nama" value="<?php echo $data[0]?>" /></td>
					<td>
						<sup>Wajib diisi</sup>
					</td>
				</tr>
				<tr>
					<td><label for="username">Nama Pengguna</label></td>
					<td>:</td>
					<td><input type="text" class="text" name="username" value="<?php echo $data[1]?>" /></td>
					<td>
						<sup>Wajib diisi</sup>
					</td>
				</tr>
				<tr>
					<td><label for="alamat">Alamat Kebun/Ladang/Sawah</label></td>
					<td>:</td>
					<td><input type="text" class="text" name="alamat" value="<?php echo $data[2]?>" /></td>
					<td>
						<sup>Wajib diisi</sup>
					</td>
				</tr>
				<tr>
					<td><label for="noktp">Nomor KTP</label></td>
					<td>:</td>
					<td><input type="text" class="text" name="noktp" value="<?php echo $data[3]?>" /></td>
					<td>
						<sup>Wajib diisi</sup>
					</td>
				</tr>
				<tr>
					<td><label for="password">Kata Sandi</label></td>
					<td>:</td>
					<td><input type="password" class="text" name="password" value="<?php echo $data[4]?>" /></td>
					<td>
						<sup>Wajib diisi</sup>
					</td>
				</tr>
				<tr>
					<td><label for="confpassword">Ulangi Kata Sandi</label></td>
					<td>:</td>
					<td><input type="password" class="text" name="confpassword" value="<?php echo $data[5]?>" /></td>
					<td>
						<sup>Wajib diisi</sup>
					</td>
				</tr>
				<tr>
					<td>
						<input type="reset" name="reset" value="Ulangi"/>
						<input type="submit" name="submit" value="Daftar!"/>
					</td>
				</tr>
			</table>
			</form>