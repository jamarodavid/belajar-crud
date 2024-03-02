<!DOCTYPE html>

<?php
	 include 'koneksi.php';

	    $Nomor = '';
		$No_Telepon ='';
		$Nama_Kontak = '';
		$Email ='';

	if(isset($_GET['ubah'])){
		$Nomor = $_GET['ubah'];
		
		$query = "SELECT * FROM tb_kontak WHERE Nomor ='$Nomor';";
		$sql = mysqli_query($conn, $query);

		$result = mysqli_fetch_assoc($sql);

		$No_Telepon = $result['No_Telepon'];
		$Nama_Kontak = $result['Nama_Kontak'];
		$Email = $result['Email'];

		// var_dump($result);

		// die();

	}

?>

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
			<nav class="navbar bg-body-tertiary mb-4">
				<div class="container-fluid">
					<a class="navbar-brand" href="#"> CRUD KONTAK </a>
				</div>
			</nav>
			

			<form method="POST" action="proses.php" >
				<input type="hidden" value="<?php echo $Nomor ?>" name="Nomor" >

			<div class="mb-4 row">
				<label for="No_Telepon" class="col-sm-2 col-form-label">Nomor</label>
				<div class="col-sm-10">
					<input
						type="number"
						class="form-control"
						name="No_Telepon"
						id="No_Telepon"
						placeholder="Masukan Nomor"
						value="<?php echo $No_Telepon; ?>"
					/>
				</div>
			</div>

				
			<div class="mb-4 row">
				<label for="Nama_Kontak" class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-10">
					<input
						type="text"
						name="Nama_Kontak"
						class="form-control"
						id="Nama_Kontak"
						placeholder="Masukan Nama"
						value="<?php echo $Nama_Kontak; ?>"
					/>
				</div>
			</div>

			<div class="mb-4 row">
				<label for="Email" class="col-sm-2 col-form-label">Email</label>
				<div class="col-sm-10">
					<input
						type="text"
						class="form-control"
						id="Email"
						name="Email"
						placeholder="Masukan Email"
						value="<?php echo $Email; ?>"
					/>
				</div>
			</div>
			<div class="mb-4 row">
				<div class="col">
					<?php
					if(isset($_GET['ubah'])){
					?>
				<button type="submit" name="aksi" value="edit" class="btn btn-primary">Simpan Perubahan</button>
				<?php
					} else {
				?>
				<button type="submit" name="aksi" value="add"  class="btn btn-primary">Tambahkan</button>
				<?php
					}
				?>
				<a type="button" href="index.php" class="btn btn-danger">Batal</a>
			</div>
			</div>
			</form>
		</div>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
			crossorigin="anonymous"
		></script>
	</body>
</html>
