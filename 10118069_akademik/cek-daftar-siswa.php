<?php
	include 'koneksi.php';

	$Nis = $_POST['Nis'];
	$Nama_siswa = $_POST['Nama_siswa'];
	$TTL = $_POST['TTL'];
	$JK = $_POST['JK'];
	$Alamat = $_POST['Alamat'];

	mysqli_query($conn, "insert into siswa values('$Nis','$Nama_siswa','$TTL','$JK','$Alamat')");

	header("location: daftar-siswa.php")
?>