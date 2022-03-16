<?php
//koneksi database
include 'koneksi.php';

//ambil data yg dikirim dari form 
$nama_produk=$_POST['nama_produk'];
$keterangan=$_POST['keterangan'];
$jumlah=$_POST['jumlah'];
$harga=$_POST['harga'];

mysqli_query($koneksi,"insert into produk values('$id','$nama_produk','$keterangan','$jumlah','$harga')");
//alih halaman ke utama
header("location:index.php");

?>
