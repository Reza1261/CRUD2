<!DOCTYPE html>
<html>
<head>
	<title>Simple DataBase Show Ruangan</title>
</head>
<body>
	<h2>Simple DataBase Show</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Tambah Data Ruangan</h3>
	
	<form action="tambah_proses.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>No. Ruangan</td>
				<td>:</td>
				<td><input type="text" name="no_ruang" required></td>
			</tr>
			<tr>
				<td>Kode Ruangan</td>
				<td>:</td>
				<td><input type="text" name="nm_ruang" size="30" required></td>
			</tr>
			<tr>
				<td>Kapasitas</td>
				<td>:</td>
				<td>
					<select name="jenis" required>
						<option value="">Pilih Kapasitas</option>
						<option value="1">Sedang</option>
						<option value="2">Kecil</option>
						<option value="3">Besar</option>
					</select>
				</td>
			</tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>