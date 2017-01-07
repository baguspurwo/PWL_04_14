<?php
	include "koneksi.php";
	$id_type =$_POST['id_type'];
	$jenis_kamar = $_POST['jenis_kamar'];
	$harga = $_POST['harga'];
	$fasilitas = $_POST['fasilitas'];

	$modal=mysqli_query($koneksi,"UPDATE tipe_kamar SET id_type = '$id_type', jenis_kamar = '$jenis_kamar', harga = '$harga', fasilitas = '$fasilitas' WHERE id_type = '$id_type'");
	header('location:index.php?page=tb_type');
?>
