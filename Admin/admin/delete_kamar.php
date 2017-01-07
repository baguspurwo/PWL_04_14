<?php
	include "koneksi.php";
	$id_ruang=$_GET['id_ruang'];
	$modal=mysqli_query($koneksi,"Delete FROM ruang_kamar WHERE id_ruang='$id_ruang'");
	header('location:index.php?page=tb_kamar');
?>
