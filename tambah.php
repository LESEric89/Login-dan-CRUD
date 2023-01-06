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
				Tambah Barang
			</div>
			<div>
				<form action="" method="post" role="form">
					<div>
						<label>Nama</label>
						<input type="text" name="nama" required="">
					</div>
					<div>
						<label>Harga</label>
						<input type="text" name="harga" required="">
					</div>

					<div>
						<label>Deskripsi</label>
						<textarea name="deskripsi" required=""></textarea>
					</div>

					<button type="submit" name="submit" value="simpan">Simpan data</button>
				</form>

				<?php
				include('koneksi.php');
				
				//melakukan pengecekan jika button submit diklik maka akan menjalankan perintah simpan dibawah ini
				if (isset($_POST['submit'])) {
					//menampung data dari inputan
					$nama = $_POST['nama'];
					$harga = $_POST['harga'];
					$deskripsi = $_POST['deskripsi'];

					//query untuk menambahkan barang ke database, pastikan urutan nya sama dengan di database
					$datas = mysqli_query($koneksi, "insert into barang (nama,harga,deskripsi)values('$nama', '$harga', '$deskripsi')") or die(mysqli_error($koneksi));
					//id barang tidak dimasukkan, karena sudah menggunakan AUTO_INCREMENT, id akan otomatis

					//ini untuk menampilkan alert berhasil dan redirect ke halaman index
					echo "<script>alert('data berhasil disimpan.');window.location='index.php';</script>";
				}
				?>
			</div>
		</div>
	</div>


</body>

</html>