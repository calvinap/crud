<?php
session_start(); 
if (!isset($_SESSION ["login"])){
	header("location: login.php");
	exit;
}
require 'function.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil di tambahkan atau tidak
	if( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<title>Tambah data mobil</title>
	<link rel="stylesheet" href="css/tambah.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MOTOSPORT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tambah.php" class="tambah">ADD</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ANOTHER
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="cetak.php" target="_blank">PRINT</a></li>
            <li><a class="dropdown-item" href="logout.php" class="logout">LOG OUT</a></li>
          </ul>
        </li>
      </ul>
      <form action="" method="post" class="cari">
	<input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off" id="keyword">
	<button type="submit" name="cari" id="tombol-cari">Cari!</button>
</form>
    </div>
  </div>
</nav>
<div class="center">
	<h1>Tambah data mobil</h1>
	<hr>
	<form class="masuk" action="" method="post" enctype="multipart/form-data">
		<ul><li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama">
				</li>
				<li>
      	<label for="merek">MEREK : </label>
				<input type="text" name="merek" id="merek">
				</li>
				<li>
				<label for="mesin">MESIN  :</label>
				<input type="text" name="mesin" id="mesin">
				</li>
				<li>
				<label for="harga">HARGA :</label>
				<input type="text" name="harga" id="harga">
				</li>
				<li>
				<label for="gambar">Gambar :</label>
				<input type="file" name="gambar" id="gambar">
				</li>
				<li>
				<button type="submit" name="submit">Tambah Data!</button>
	 </ul>
	</form>
</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>