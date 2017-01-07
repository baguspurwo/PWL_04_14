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


	$modal=mysqli_query($koneksi,"UPDATE pemesanan SET id_pesan = '$id_pesan', id_type = '$id_type', jumlah = '$jumlah', nama_pemesan = '$nama_pemesan', no_ktp = '$no_ktp', tgl_pesan = '$tgl_pesan', tgl_out = '$tgl_out', email = '$email', telepon  = '$telepon' WHERE id_pesan = '$id_pesan'");
	header('location:index.php?page=tb_pesan');
?>
