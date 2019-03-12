<?php 
require 'koneksi.php';
  session_start();
  if (!isset($_SESSION['login'])) {
    header("location: register.php");
    exit;  
  }
  $tampil = query ("SELECT * FROM blog");
  
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>TUGAS CRUD</title>
</head>
<body style="background: url(13.jpg);">

<center>
    <h2>Daftar Program Studi Strata 1 Fakultas Ilmu Komputer</h2>
    <h2>Universitas Sriwijaya</h2>
  <br>
  <style>
table {
  border-collapse: collapse;
  width: 50%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #6C3483}

th {
  background-color: #EBDEF0;
  color: black;
}
</style>
    <table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>No</th>
    <th>Program Studi</th>
    <th><center>Deskripsi</th></center>
    <th>Terkhir Update</th>
    <th>Opsi</th>
  </tr> 

<?php $i=1; ?>
<?php foreach ($tampil as $x ) : //foreach itu pengulangan pada array  ?> 
  <tr>
    <td><?= $i; ?></td>
    <td><?= $x["judul"] ?></td>
    <td><?= $x["isi"];  ?></td>
    <td><?= $x["waktu"];  ?></td>
    <td>
      <center><button><a href="ubah.php?id=<?= $x["id"]?>">Edit</a></button><br><br><button><a href="hapus.php?id=<?= $x["id"]?>" onclick =" return confirm ('Apakah Anda Yakin untuk Menghapus Tautan Ini ?');">Hapus</a></button></center>
    </td>
  </tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>

<br>
<button><a href="creat.php">Tambah</a></button>
<button><a href="logout.php">Logout</a></button>
<br><br>
<br>

</center>
  </body>
</html>
