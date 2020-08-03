<?php
require 'function.php';

//ambil dari url

$id = $_GET['id'];
$m = query("SELECT * FROM mahasiswa WHERE id = $id");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>

  <h3>Detail Mahasiswa</h3>
  <ul>
    <li><img src="img/<?= $m['gambar']; ?> " width="80"></li>
    <li><?= $m['nrp']; ?></li>
    <li><?= $m['nama']; ?></li>
    <li><?= $m['email']; ?></li>
    <li><?= $m['jurusan']; ?></li>
    <li>
      <a href="">Ubah</a> | <a href="">Hapus</a>
    </li>
    <li>
      <a href="latihan3.php">Kembali ke home</a>
    </li>
  </ul>

</body>

</html>