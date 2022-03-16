<!DOCTYPE html>
<html>
<head><title> Pijarcamp Tugas 10</title></head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<div class="judul">
		<h1><b>PijarCamp</b></h1>
	</div>
</br>
<a href="index.php"> << KEMBALI</a>
</br>
</br>
<h3>TAMBAH DATA</h3>
<form method="post" action="prosestambah.php">
	<table>
		<tr>
			<td>Nama_produk</td>
			<td><Input type="text" name="nama_produk"></td>
		</tr>
        <tr>
			<td>Keterangan</td>
			<td><Input type="text" name="keterangan"></td>
		</tr>
		<tr>
			<td>Jumlah</td>
			<td><Input type="text" name="jumlah"></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td><Input type="text" name="harga"></td>
		</tr>
			<td></td>
			<td><Input type="submit" value="Simpan"></td>
		</tr>
	</table>

</form>
</body>
</html>
