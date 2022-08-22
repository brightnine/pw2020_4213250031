<?php 
$conn = mysqli_connect("localhost", "root", "", "pw_4213250031");

$query = mysqli_query($conn, "SELECT * FROM mahasiswa");

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

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>
    <?php $no = 1; 
      while ($result = mysqli_fetch_assoc($query)): ?>
    <tr>
      <td><?= $no; ?></td>
      <td>
        <img src="img/<?=$result['gambar']?>" alt="">
      </td>
      <td><?= $result['nrp']; ?></td>
      <td><?= $result['nama']; ?></td>
      <td><?= $result['email']; ?></td>
      <td><?= $result['jurusan']; ?></td>
      <td><a href="">Ubah</a> | <a href="">Hapus</a></td>
    </tr>
    <?php $no++;
      endwhile; ?>
  </table>
</body>

</html>