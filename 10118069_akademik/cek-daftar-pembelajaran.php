<?php
	include 'koneksi.php';

	$Nis = $_POST['Nis'];
	$Nip = $_POST['Nip'];
	$Kelas = $_POST['Kelas'];

	mysqli_query($conn, "insert into pembelajaran values('$Nis','$Nip','$Kelas')");

	header("location: daftar-pembelajaran.php")
?>