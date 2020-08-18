<?php
	include 'koneksi.php';

	$Nip = $_POST['Nip'];
	$Nama_guru = $_POST['Nama_guru'];
	$Mapel = $_POST['Mapel'];

	mysqli_query($conn, "insert into pengajar values('$Nip','$Nama_guru','$Mapel')");

	header("location: daftar-pengajar.php")
?>