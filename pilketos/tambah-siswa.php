<?php
// panggil file koneksi databse
include 'db.php';
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
    <li><a href="data-calon.php">Data Calon</a></li>
    <li><a class="active" href="data-siswa.php">Data Siswa</a></li>
    <li style="margin-top:500px"><a class="logout" href="index.php"><center><b><- Logout</b></center></a></li>
  </ul>
 </div>
  
  <div class="data-kanan">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 p-3">
              <h1>Tambah Siswa</h1>
            </div>
            <div class="col-4 text-center p-3"><a href="data-calon.php" class="btn btn-dark"><- Kembali</a></div>
        </div>
      
      <div class="row justify-content-center">
        <div class="col-10 card shadow">
           <div class="card-body">
             <!-- form jika ditekan tombol submit akan mengarah ke halaman tambah siswa baru -->
             <form action="tambah-siswa-baru.php" method="POST">
                <!-- foto -->
                <!-- nama -->
                <div class="form-group">
                  <label for="formGroupExampleInput">Nama Lengkap</label>
                  <input type="text" name="nama_lengkap" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Nama Lengkap...">
                </div>
                <!-- kelas -->
                <div class="form-group">
                  <label for="formGroupExampleInput">Kelas</label>
                  <input type="text" name="kelas" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Kelas...">
                </div>
                <!-- visi misi -->
                <div class="form-group">
                  <label for="formGroupExampleInput">NIS</label>
                  <input type="text" name="nis" class="form-control" id="formGroupExampleInput" placeholder="Masukkan NIS...">
                </div>
                <div class="col-3">
                    <input type="submit" value="Simpan" class="btn btn-dark">
                </div>
              </form>
           </div>
        </div>
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

</body>
</html>