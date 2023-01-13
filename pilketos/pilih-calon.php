<?php
// panggil file koneksi databse
include 'db.php';
// ambil data calon dari tabel calon
$calon = mysqli_query($db, "SELECT * FROM calon");
// ambil data kelas dari cache
session_start();
$id_kelas = $_SESSION['id_kelas'];
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <style>
    .kotak-kiri{
      width: 150px;
      height: 1050px;
      background: black;
      float: left;
      position: absolute;
    }
    .kotak-kanan{
      width: 150px;
      height: 1050px;
      background: black;
      float: right;
      position: absolute;
      /* supaya kotak hitam kedua ada di kanan dan mepet ke atas */
      right: 0;
      top: 0;
    }
  </style>
</head>
<body>
  <div class="kotak-kiri"></div>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8 p-3">
        <center><img src="osis2.jpg" width="60"></center>
        <center> <h1>Silakan Pilih Calon Ketua Osis</h1></center>
      </div>

    </div>

    <!-- ketos -->
    <!-- calon 1 -->
      <form action="voting.php" method="post">
        <input type="hidden" name="kelas" value="<?=$id_kelas?>">
    <div class="row justify-content-center">
      
      <!-- name di input radio harus sama tp id nya harus beda -->
      <?php foreach ($calon as $key => $value):?>
        <input type="radio" name="ketos" id="<?=$value['id']?>" value="<?=$value['id']?>" required>  
        <div class="col-md-5 card calon m-3 p-3" style="cursor: pointer;">
          <label for="<?=$value['id']?>">
            <!-- gambar calon -->
            <center><img class="card-img-top" src="<?=$value['foto']?>" style="border-radius: 10px; width:100%; margin:auto; border: 2px solid black"></center>
            <div class="card-body">
              <center><h5 class="card-title"><?=$value['nama_calon']?> <br> Kelas <?=$value['id_kelas']?></h5></center>
              <p class="card-text"><?=$value['visi_misi']?></p>
            </div></label>
          </div> 
        <?php endforeach?>
        <!-- end calon 1-->





      </div>

      <div class="row justify-content-center mt-1">
        <!-- tombol vote -->
        <div class="col-11">
          <center><input type="submit" class="btn btn-lg btn-block btn-dark" value="Pilih Calon Sebagai Ketua Osis"></center>
        </div>
      </div>
    </form> 
    <!-- end form -->
      <br>
      <div class="row">
        <div class="col-12 card p-2">
          <center>Copyrigth &copy Pilketos 2022</center>
        </div>
      </div>
    </div>
    <div class="kotak-kanan"></div>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
  </html>