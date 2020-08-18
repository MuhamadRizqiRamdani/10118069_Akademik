<?php
	include 'koneksi.php';

	$Nis = $_POST['Nis'];
	$Nama_siswa = $_POST['Nama_siswa'];
	$TTL = $_POST['TTL'];
	$JK = $_POST['JK'];
	$Alamat = $_POST['Alamat'];

	mysqli_query($conn, "update siswa set Nama_siswa='$Nama_siswa', TTL='$TTL', JK='$JK', Alamat='$Alamat' where Nis='$Nis'");

	header("location: daftar-siswa.php");
?>