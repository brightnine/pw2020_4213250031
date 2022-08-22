<?php 
require 'functions.php';

if(isset($_POST['tambah']))
{
  tambah($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah data Mahasiswa</title>
</head>

<body>
  <h3>Tambah data Mahasiswa</h3>
  <form action="" method="post">
    <ul>
      <li>
        <label>
          Nama:
          <input type="text" name="nama" required autofocus>
        </label>
      </li>

      <li>
        <label>
          NRP:
          <input type="text" name="nrp" required>
        </label>
      </li>

      <li>
        <label>
          Email:
          <input type="text" name="email" required>
        </label>
      </li>

      <li>
        <label>
          Jurusan:
          <input type="text" name="jurusan" required>
        </label>
      </li>

      <li>
        <label>
          Gambar:
          <input type="text" name="gambar" required>
        </label>
      </li>
    </ul>

    <button type="submit" name="tambah">Tambah Data</button>
  </form>
  <a href="index.php">Kembali ke halaman sebelumnya</a>
</body>

</html>