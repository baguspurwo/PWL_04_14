<?php
	include "koneksi.php";
	$id_user =$_POST['id_user'];
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$status = $_POST['status'];

	$modal=mysqli_query($koneksi,"UPDATE user SET nama = '$nama', username = '$username', password = '$password', status = '$status' WHERE id_user = '$id_user'");
	header('location:index.php?page=tb_user');
?>
