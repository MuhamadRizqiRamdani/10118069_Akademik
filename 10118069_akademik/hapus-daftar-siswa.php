<?php
	include 'koneksi.php';

	$Nis = $_GET['Nis'];

	mysqli_query($conn, "delete from siswa where Nis='$Nis'");

	header("location: daftar-siswa.php")
?>