<?php
include "koneksi.php";
$id_pesan =$_POST['id_pesan'];
$id_type = $_POST['id_type'];
$jumlah = $_POST['jumlah'];
$nama_pemesan = $_POST['nama_pemesan'];
$no_ktp = $_POST['no_ktp'];
$tgl_pesan =$_POST['tgl_pesan'];
$tgl_out = $_POST['tgl_out'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];

mysqli_query($koneksi,"INSERT INTO pemesanan (id_pesan,id_type,jumlah,nama_pemesan,no_ktp,tgl_pesan,tgl_out,email,telepon) VALUES ('$id_pesan','$id_type','$jumlah','$nama_pemesan','$no_ktp','$tgl_pesan','$tgl_out','$email','$telepon')");
header('location:index.php?page=tb_pesan');

?>
