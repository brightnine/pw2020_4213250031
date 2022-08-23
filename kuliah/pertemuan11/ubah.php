<?php 
require 'functions.php';

if(!isset($_GET['id'])){
  header('refresh:0; index.php');
  return false;
}

$id = $_GET['id'];
$row = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if(isset($_POST['ubah'])){
  ubah($_POST, $id);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Mahasiswa</title>
</head>

<body>
  <h1>Ubah Data Mahasiswa</h1>

  <form action="" method="post">
    <label>
      Name:
      <input type="text" value="<?= $row['nama']; ?>" name="nama">
    </label> <br>

    <label>
      NRP:
      <input type="text" value="<?= $row['nrp']; ?>" name="nrp" readonly>
    </label> <br>

    <label>
      Email:
      <input type="text" value="<?= $row['email']; ?>" name="email">
    </label> <br>

    <label>
      Jurusan:
      <input type="text" value="<?= $row['jurusan']; ?>" name="jurusan">
    </label> <br>

    <label>
      Gambar:
      <input type="text" value="<?= $row['gambar']; ?>" name="gambar">
    </label> <br> <br>

    <button type="submit" name="ubah">Ubah Data!</button>
  </form>

  <a href="lihatDetail.php">Kembali ke halaman sebelumnya</a>

</body>

</html>