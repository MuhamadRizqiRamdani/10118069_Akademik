<?php
	include 'koneksi.php';

	//$Nis = $_GET['Nis'];
	$Kelas = $_GET['Kelas'];
	mysqli_query($conn, "delete from pembelajaran where Kelas='$Kelas'");

	header("location: daftar-pembelajaran.php")
?>