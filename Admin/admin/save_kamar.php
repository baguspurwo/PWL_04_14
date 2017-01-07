<?php
include "koneksi.php";
$id_ruang =$_POST['id_ruang'];
$id_type = $_POST['id_type'];
$nama_kamar = $_POST['nama_kamar'];
$status = $_POST['status'];

mysqli_query($koneksi,"INSERT INTO ruang_kamar (id_type,nama_kamar,status) VALUES ('$id_type','$nama_kamar','$status')");
header('location:index.php?page=tb_kamar');
?>
