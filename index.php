<?php
	include 'koneksi.php';

	$query = "SELECT * FROM tb_kontak;";
	$sql = mysqli_query($conn, $query);
	$no = 0;
	
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>CRUD</title>
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
			crossorigin="anonymous"
		/>
	</head>
	<body>
		<div class="container">
			<nav class="navbar bg-body-tertiary">
				<div class="container-fluid">
					<a class="navbar-brand" href="#"> CRUD KONTAK </a>
				</div>
			</nav>

			<h1>Data Kontak</h1>
			<figure>
				<blockquote class="blockquote">
					<p>Berisi nama kontak yang telah di simpan</p>
				</blockquote>
				<figcaption class="blockquote-footer">
					CRUD,<cite title="Source Title">Create Read Update & Delete </cite>
				</figcaption>
			</figure>

			<a type="button" href="kelola.php" class="btn btn-success">
				+ Tambah Kontak</a
			>

			<div class="table-responsive">
				<table class="table align-middle table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Nomor Telepon</th>
							<th>Nama</th>
							<th>email</th>
							<th>aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
							while($result = mysqli_fetch_assoc($sql)){

							
						?>
						<tr>
							<td><?php echo ++$no; ?></td>
							<td><?php echo $result['No_Telepon'] ?></td>
							<td><?php echo $result['Nama_Kontak'] ?></td>
							<td><?php echo $result['Email'] ?></td>
							<td>
							<a type="button" href="proses.php?hapus=<?php echo $result['Nomor'] ?>" class="btn btn-danger btn-sm" onClick="return confrim('Yakin mau di hapus')" >
									Hapus
								</a>
								<a
									type="button"
									href="kelola.php?ubah=<?php echo $result['Nomor'] ?>"
									class="btn btn-primary btn-sm"
								>
									Edit
								</a>
							</td>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
			crossorigin="anonymous"
		></script>
	</body>
</html>
