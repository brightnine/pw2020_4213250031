<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

if(isset($_POST['cari'])){
  $mahasiswa = cari($_POST['keyword']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>
  <br>
  <form action="" method="post">
    <input type="text" name="keyword" autocomplete="off" placeholder="Masukkan kata pencarian"
      style="width:200px; margin-right: 5px;">
    <button type="submit" name="cari">Cari!</button>
  </form>
  <br><br>
  <a href="tambah.php">Tambah data Mahasiswa</a> <br><br>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>

    <?php 
    if(empty($mahasiswa)):
    ?>
    <tr>
      <td colspan="4" style="font-style:italic; color:red;">Data mahasiswa yang anda cari tidak ada!</td>
    </tr>
    <?php endif; ?>

    <?php $no = 1; 
    foreach($mahasiswa as $m) : ?>
    <tr>
      <td><?= $no++; ?></td>
      <td>
        <img src="img/<?= $m['gambar']; ?>" width="60" alt="">
      </td>
      <td><?= $m['nama']; ?></td>
      <td>
        <a href="lihatDetail.php?id=<?= $m['id']; ?>">Lihat Detail</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>