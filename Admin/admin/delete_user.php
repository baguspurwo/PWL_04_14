<?php
	include "koneksi.php";
	$id_user=$_GET['id_user'];
	$modal=mysqli_query($koneksi,"Delete FROM user WHERE id_user='$id_user'");
	header('location:index.php?page=tb_user');
?>
