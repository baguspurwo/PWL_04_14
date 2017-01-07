<?php
	include "koneksi.php";
	$id_type=$_GET['id_type'];
	$modal=mysqli_query($koneksi,"Delete FROM tipe_kamar WHERE id_type='$id_type'");
	header('location:index.php?page=tb_type');
?>
