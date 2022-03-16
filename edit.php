<!DOCTYPE html>
<html>
<head>
	<title>Pijar Tugas 10</title>
</head>
<body>
	<div class="judul">
		<h1><b>Pijarcamp</b></h1>
	</div>
</br>
<a href="index.php"><< KEMBALI </a>
</br>
</br>
<h3> Edit data</h3>

<?php 
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi,"select * from produk where id='$id'");
while($d = mysqli_fetch_array($data)){
 ?>
<form method="post" action="update.php">
	<table>
		<tr>
			<td>Nama_produk</td>
			<td>
				<input type="hidden" name="id" value="<?php echo $d['id'];?>">
				<input type="text" name="nim" value ="<?php echo $d['nama_produk']; ?>">
			</td>
		</tr>

		<tr>
			<td>Keterangan</td>
			<td><input type="text" name="ket" value="<?php echo $d['Keterangan'];?>"></td>
		</tr>
		<tr>
			<td>Jumlah</td>
			<td><input type="text" name="jumlah" value="<?php echo $d['jumlah'];?>"></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td><input type="text" name="harga" value="<?php echo $d['harga'];?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Simpan"></td>
		</tr>
	</table>
</form>
<?php

}
?>

</body>
</html>