<?php
	include "koneksi.php";
  $id_ruang =$_POST['id_ruang'];
  $id_type = $_POST['id_type'];
  $nama_kamar = $_POST['nama_kamar'];
  $status = $_POST['status'];

	$modal=mysqli_query($koneksi,"UPDATE ruang_kamar SET id_type = '$id_type', nama_kamar = '$nama_kamar', status = '$status' WHERE id_ruang = '$id_ruang'");
	header('location:index.php?page=tb_kamar');
?>
