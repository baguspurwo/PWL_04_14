<?php
	include "koneksi.php";
	$id_pesan=$_GET['id_pesan'];
	$modal=mysqli_query($koneksi,"Delete FROM pemesanan WHERE id_pesan='$id_pesan'");
	header('location:index.php?page=tb_pesan');
?>
