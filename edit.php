<!DOCTYPE html>
<html>

<head>
	<title>UJIAN</title>
</head>

<body>
	<div>
		<h1>Table Barang</h1>
		<div>
			<div>
				Edit Barang
			</div>
			<div>
				<?php
				session_start();
				include('koneksi.php');

				$id = $_GET['id']; //mengambil id barang yang ingin diubah

				//menampilkan barang berdasarkan id
				$data = mysqli_query($koneksi, "select * from barang where id = '$id'");
				$row = mysqli_fetch_assoc($data);

				?>
				<form action="" method="post" role="form">
					<div>
						<label>Nama</label>
						<!--  menampilkan nama barang -->
						<input type="text" name="nama" required="" class="form-control" value="<?= $row['nama']; ?>">

						<!-- ini digunakan untuk menampung id yang ingin diubah -->
						<input type="hidden" name="id" required="" value="<?= $row['id']; ?>">
					</div>
					<div class="form-group">
						<label>Harga</label>
						<input type="text" name="harga" required="" value="<?= $row['harga']; ?>">
					</div>

					<div class="form-group">
						<label>Deskripsi</label>
						<textarea required="" name="deskripsi"><?= $row['deskripsi']; ?></textarea>
					</div>
					<button type="submit" name="submit" value="simpan">update data</button>
				</form>

				<?php
				

				//jika klik tombol submit maka akan melakukan perubahan
				if (isset($_POST['submit'])) {
					$id = $_POST['id'];
					$nama = $_POST['nama'];
					$harga = $_POST['harga'];
					$deskripsi = $_POST['deskripsi'];

					//query mengubah barang
					mysqli_query($koneksi, "update barang set nama='$nama', harga='$harga', deskripsi='$deskripsi' where id ='$id'") or die(mysqli_error($koneksi));

					//redirect ke halaman index.php
					echo "<script>alert('data berhasil diupdate.');window.location='halaman_admin.php';</script>";
				}



				?>
			</div>
		</div>
	</div>

</body>

</html>