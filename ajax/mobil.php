<?php require '../function.php';
$keyword = $_GET["keyword"];
$query = "SELECT * FROM mobil
          WHERE
          nama LIKE '%$keyword%' OR
          merek LIKE '%$keyword%' OR
          mesin LIKE '%$keyword%' OR
          harga LIKE '%$keyword%'";
$mobil = query($query); 
?>
<table border="1" cellpadding="10" cellspacing="0">

<tr>
  <th>No.</th>
  <th>Aksi</th>
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
  <td>
    <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
  </td>
  <td><img src="img/<?= $row["gambar"]; ?>" width="125"></td>
  <td><?= $row["nama"]; ?></td>
  <td><?= $row["merek"]; ?></td>
  <td><?= $row["mesin"]; ?></td>
  <td><?= $row["harga"]; ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>

</table>