<?php
include "koneksi.php";
$id_type =$_POST['id_type'];
$jenis_kamar = $_POST['jenis_kamar'];
$harga = $_POST['harga'];
$fasilitas = $_POST['fasilitas'];

mysqli_query($koneksi,"INSERT INTO tipe_kamar (id_type,jenis_kamar,harga,fasilitas) VALUES ('$id_type','$jenis_kamar','$harga','$fasilitas')");
header('location:index.php?page=tb_type');
?>
