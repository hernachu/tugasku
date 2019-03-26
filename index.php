<?php 
require 'koneksi.php';
  $tampil = query ("SELECT * FROM blog");

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>TUGAS CRUD</title>
</head>
<body style="background: url(4.jpg);">


  <form id="form-container" class="form-container">
   
<!--Element-elemen tag <body> tulis disini-->
<header> <!--Section HEADER-->

<center>
       <div class="menu">
     
      <ul>
        
      
        <label for="input">Wikipedia :</label>
        <input type="text" id="input" value="">
        <button id="submit-btn">submit</button>
          
      </ul>
      
    </div>
    </center>
  </header>

</header>
 <li class="wikipedia-container">
        <h3 id="wikipedia-header">Relevant Wikipedia Links</h3>
        <ul id="wikipedia-links">Type in an address above and find relevant Wikipedia articles here!</ul>
    </li>


<center>
  <br>
    <h2>Daftar Program Studi Strata 1 Fakultas Ilmu Komputer</h2>
    <h2>Universitas Sriwijaya</h2>
    <div align="center" style="color:red">
  <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>No</th>
    <th>Judul</th>
    <th>Isi</th>
    <th>Terkhir di Update</th>
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
      <a href="index.php">Edit</a> | <a href="index.php">Hapus</a>
    </td>
  </tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>
<br>
<button><a href="register.php">Login</a></button>
</center>

<script src="jquery.min.js"></script>
    <script src="script.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>

  </body>
</html>
