<?php
	include 'koneksi.php';

	$Nip = $_GET['Nip'];

	mysqli_query($conn, "delete from pengajar where Nip='$Nip'");

	header("location: daftar-pengajar.php")
?>