<?php 

function koneksi(){
  return mysqli_connect("localhost", "root", "", "pw_4213250031");
}




function query($query){
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  $rows = [];
  while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }

  return $rows;
}




function tambah($data){

  $conn = koneksi();

  $nama = htmlspecialchars($data['nama']);
  $nrp = htmlspecialchars($data['nrp']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO 
            mahasiswa
            VALUES (null, '$nama', '$nrp', '$email', '$jurusan', '$gambar')";
  
  mysqli_query($conn, $query) or die(mysqli_error($conn));

  echo "<script>
          alert('Data berhasil ditambahkan');
          document.location.href = 'index.php';
        </script>";
}


function hapus($id){
  $conn = koneksi();

  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id ") or die(mysqli_error($conn));

  echo "<script>
          alert('Data berhasil dihapus');
          document.location.href = 'index.php';
        </script>";
}
?>