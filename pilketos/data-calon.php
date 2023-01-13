<?php
// panggil file koneksi databse
include 'db.php';
// ambil data calon dari tabel calon
$calon = mysqli_query($db, "SELECT * FROM calon");
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="bungkus">
 <div class="data-kiri">
  <ul>
    <li><center><img src="osis2.jpg" width="150" style="margin-top: 30px;"></center></li>
    <li style="margin-top: 50px;"><a href="dashboard.php">Dashboard</a></li>
    <li><a class="active" href="data-calon.php">Data Calon</a></li>
    <li><a href="data-siswa.php">Data Siswa</a></li>
    <li style="margin-top:500px"><a class="logout" href="index.php"><center><b><- Logout</b></center></a></li>
  </ul>
 </div>
  
  <div class="data-kanan">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 p-3">
              <h1>Calon Ketua Osis</h1>
            </div>
            <div class="col-4 text-center p-3"><a href="form-calon.php" class="btn btn-dark">+ Tambah Calon</a></div>
        </div>
      
      <div class="row justify-content-center">
        <!-- calon 1 -->
        <?php foreach ($calon as $key => $value):?>
        <div class="col-md-4 card calon m-3 p-3">
            <div class="card-header bg-none float-right">
                <div class="dropdown float-right">
                    <!-- tombol opsi -->
                    <button class="btn btn-dark btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Opsi
                    </button>
                    <!-- isi tombol opsi -->
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="edit-calon.php?id=<?=$value['id']?>">Edit</a>
                      <a class="dropdown-item" href="#">Hapus</a>
                    </div>
                  </div>
            </div>
            <!-- gambar calon -->
                <img class="card-img-top" src="<?=$value['foto']?>" style="border-radius: 10px; width:350px; margin:auto; border: 2px solid black">
                <div class="card-body">
                  <h5 class="card-title"><?=$value['nama_calon']?><br><?=$value['id_kelas']?></h5>
                  <p class="card-text"><?=$value['visi_misi']?></p>
                </div>
        </div> <!-- end calon 1-->
        <?php endforeach?>
      </div>

      <div class="row">
        <div class="col-12 card p-2">
          <center>Copyrigth &copy Pilketos 2022</center>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>