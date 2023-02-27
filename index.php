<?php 
session_start(); 
if (!isset($_SESSION ["login"])){
	header("location: login.php");
	exit;
}
require 'function.php';
$mobil = query("SELECT * FROM mobil");

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
	$mobil = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<title>Halaman Admin</title>
	<link rel="stylesheet" href="css/style.css"
</head>
<body class="body">
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
				<li><a class="nav-link" href="logout.php" class="logout">LOG OUT</a>
			</li>
      </ul>
      <form action="" method="post" class="cari">
	<input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off" id="keyword">
	<button type="submit" name="cari" id="tombol-cari">Cari!</button>
</form>
    </div>
  </div>
</nav>
<h1>Daftar mobil</h1>

<br>
<br>
<div id="container">
<table border="1" cellpadding="10" cellspacing="0">

	<tr>
		<th>No.</th>
		<th class="aksi">Aksi</th>
		<th>Gambar</th>
		<th>nama</th>
		<th>merek</th>
		<th>mesin</th>
		<th>harga</th>
	</tr>

	<?php $i = 1; ?>
	<?php foreach( $mobil as $row ) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td class="ubah">
			<a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
			<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
		</td>
		<td><img src="img/<?= $row["gambar"]; ?>" width="300"></td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["merek"]; ?></td>
		<td><?= $row["mesin"]; ?></td>
		<td><?= $row["harga"]; ?></td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
	
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>
</html>