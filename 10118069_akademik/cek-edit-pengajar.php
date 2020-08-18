<?php
	include 'koneksi.php';

	$Nip = $_POST['Nip'];
	$Nama_guru = $_POST['Nama_guru'];
	$Mapel = $_POST['Mapel'];

	mysqli_query($conn, "update pengajar set Nama_guru='$Nama_guru', Mapel='$Mapel' where Nip='$Nip'");

	header("location: daftar-pengajar.php");
?>