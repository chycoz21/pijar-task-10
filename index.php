<!DOCTYPE html>
<html>
<head><title> Pijarcamp Tugas 10</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">
		<h1><b>Pijarcamp</b></h1>
	</div>
</br>

<?php
if (isset($_GET['pesan'])){
	$pesan = $_GET['pesan'];
	if($pesan == "input"){
	echo "data sudah berhasil diinput";
	}
		else if($pesan =="update"){
		echo "data sudah berhasil diupdate";
	} else if ($pesan == "hapus"){
	echo "data sudah di hapus";
}
	}

?>
</br>
<a class="tombol" href="input.php"> + Tambah Data Baru</a>
<h3>List Data</h3>
<table border="5">
<tr>
	<th>No</th>
	<th>nama produk</th>
	<th>keterangan</th>
	<th>Jumlah</th>
	<th>harga</th></tr>
    <?php
    include 'koneksi.php';
    $nomor=1;
    $data = mysqli_query($koneksi,"select * from produk");
		while($d = mysqli_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $nomor++; ?></td>
		<td><?php echo $d ['nama_produk']; ?></td>
		<td><?php echo $d ['keterangan']; ?> </td>
		<td><?php echo $d ['jumlah']; ?></td>
		<td><?php echo $d ['harga']; ?></td>

      <td>
      	<a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>  |  
	 <a href="hapus.php?id=<?php echo $d['id']; ?>">Hapus</a>
     </td>
    </tr>
    <?php } ?>
</table>
</body>
</html>