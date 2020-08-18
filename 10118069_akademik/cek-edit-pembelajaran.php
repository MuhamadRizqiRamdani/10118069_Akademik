<?php
	include 'koneksi.php';

	$Nis = $_POST['Nis'];
	$Nip = $_POST['Nip'];
	$Kelas = $_POST['Kelas'];

	mysqli_query($conn, "update pembelajaran set Kelas='$Kelas' where Nis='$Nis'");

	header("location: daftar-pembelajaran.php");
?>