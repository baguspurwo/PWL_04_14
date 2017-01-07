<?php
include "koneksi.php";
$id_user =$_POST['id_user'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$status = $_POST['status'];

mysqli_query($koneksi,"INSERT INTO user (nama,username,password,status) VALUES ('$nama','$username','$password','$status')");
header('location:index.php?page=tb_user');
?>
