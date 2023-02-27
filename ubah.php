<?php
session_start(); 
if (!isset($_SESSION ["login"])){
	header("location: login.php");
	exit;
}
require 'function.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mbl = query("SELECT * FROM mobil WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil diubah atau tidak
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'index.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah data mobil</title>
</head>
<body>
	<h1>Ubah data mobil</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $mbl["id"]; ?>">
		<input type="hidden" name="gambarLama" value="<?= $mbl["gambar"]; ?>">
		<ul>
			<li>
				<label for="nrp">NAMA : </label>
				<input type="text" name="nama" id="nama" required value="<?= $mbl["nama"]; ?>">
			</li>
			<li>
				<label for="nama">MEREK : </label>
				<input type="text" name="merek" id="merek" value="<?= $mbl["merek"]; ?>">
			</li>
			<li>
				<label for="email">MESIN :</label>
				<input type="text" name="mesin" id="mesin" value="<?= $mbl["mesin"]; ?>">
			</li>
			<li>
				<label for="jurusan">HARGA :</label>
				<input type="text" name="harga" id="harga" value="<?= $mbl["harga"]; ?>">
			</li>
			<li>
				<label for="gambar">Gambar :</label> <br>
				<img src="img/<?= $mbl['gambar']; ?>" width="40"> <br>
				<input type="file" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data!</button>
			</li>
		</ul>

	</form>




</body>
</html>