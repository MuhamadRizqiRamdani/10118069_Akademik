<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid bg-light">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="#">SEKOLAH</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				</button>
			<div class="container">
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">
				       
				        <li class="nav-item">
				    	    <a class="nav-link" href="daftar-siswa.php">DAFTAR SISWA</a>
					    </li>
					    <li class="nav-item">
					    	<a class="nav-link" href="daftar-pengajar.php">PENGAJAR</a>
					    </li>
					    <li class="nav-item">
					    	<a class="nav-link" href="daftar-pembelajaran.php">PEMBELAJARAN</a>
					    </li>
				    </ul>
				    
				</div>
		  </div>
		</nav>
		<div class="jumbotron">
		<div class="container col-md-6">
			<form method="post" action="cek-daftar-pengajar.php">
				<h2 class="text-uppercase text-center">MASUKAN DATA PENGAJAR</h2><br/>
		        <div class="form-group">
			 	    <label for="Nip">NIP</label>
				    <input type="text" name="Nip" class="form-control" id="Nip">
				</div>
				<div class="form-group">
				    <label for="Nama_guru">NAMA GURU</label>
				    <input type="text" class="form-control" id="Nama_guru" name="Nama_guru">
				</div>
				<div class="form-group">
				    <label for="Mapel">MATA PELAJARAN</label>
				    <input type="textarea" class="form-control" id="Mapel" name="Mapel">
				</div>
				<input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
			</form>
		</div>
		<br/><br/><hr><br/><br/>
		<h3 class="text-uppercase text-center">DATA PENGAJAR</h3><br/>
		<div class="container">
		<table class="table">
			<thead class="bg-dark text-white">
				<tr>
					<th scope="col">NIP</th>
					<th scope="col">NAMA GURU</th>
					<th scope="col">PELAJARAN</th>
					<th scope="col">OPSI</th>
				</tr>
			</thead>
			<tbody>
				<?php
					include 'koneksi.php';

					$data = mysqli_query($conn, "select * from pengajar");
					while ($d = mysqli_fetch_array($data)) {
						?>
						<tr>
							<th scope="row"><?php echo $d['Nip']; ?></th>
							<td><?php echo $d['Nama_guru']; ?></td>
							<td><?php echo $d['Mapel']; ?></td>
							<td>
								<a href="edit-pengajar.php?Nip=<?php echo $d['Nip']; ?>">EDIT</a>
								<a href="hapus-pengajar.php?Nip=<?php echo $d['Nip']; ?>">HAPUS</a>
							</td>
						</tr>
						<?php
					}
				?>	
			</tbody>
		</table>
	</div>
	</div>
	<div class="footer-copyright text-center py-3 bg-dark text-white">
		<p>© 2020 Copyright</p>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>