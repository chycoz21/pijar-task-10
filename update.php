<?php
include 'koneksi.php';

// tangkap data yg dikirm dari form
$nama_produk=$_POST['nama_produk'];
$ket=$_POST['keterangan'];
$jumlah=$_POST['jumlah'];
$harga=$_POST['harga'];


//update data ke database 

mysqli_query($koneksi,"update produk set nama_produk='$nama_produk', keterangan='$keterangan', jumlah='$jumlah', harga='$harga' where id='$id'");

//kembali ke index.php

header ("location:index.php");

?>