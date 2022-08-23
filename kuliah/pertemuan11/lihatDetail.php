<?php 
require 'functions.php';
$id = $_GET['id'];
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id ")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa</title>
</head>

<body>
  <h1>Data Mahasiswa</h1>
  <ul>
    <li>
      <img src="img/<?= $mhs['gambar']; ?>" alt="">
    </li>
    <li><?= $mhs['nrp']; ?></li>
    <li><?= $mhs['nama']; ?></li>
    <li><?= $mhs['email']; ?></li>
    <li><?= $mhs['jurusan']; ?></li>
    <li>
      <a href="ubah.php?id=<?= $mhs['id']; ?>">Ubah</a> | <a href="hapus.php?id=<?= $mhs['id']; ?>"
        onclick="return confirm('Apakah anda yakin ingin menghapus data?')">Hapus</a>
    </li>
    <li><a href="index.php">Kembali ke halaman sebelumnya</a></li>
  </ul>
</body>

</html>