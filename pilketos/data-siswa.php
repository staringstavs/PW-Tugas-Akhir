<?php
// panggil file koneksi databse
include 'db.php';
// ambil data siswa dari tabel siswa
$siswa = mysqli_query($db, "SELECT * FROM siswa");
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="bungkus">
  <!-- Sidebar Menu -->
 <div class="data-kiri">
    <ul>
      <li><center><img src="osis2.jpg" width="150" style="margin-top: 30px;"></center></li>
      <li style="margin-top: 50px;"><a href="dashboard.php">Dashboard</a></li>
      <li><a href="data-calon.php">Data Calon</a></li>
      <li><a class="active" href="data-siswa.php">Data Siswa</a></li>
      <li style="margin-top:500px"><a class="logout" href="index.php"><center><b><- Logout</b></center></a></li>
    </ul>
 </div>
  
  <!-- Isi Konten -->
  <div class="data-kanan">
    <div class="container-fluid">
      <div class="row">
        <div class="col-8 p-3">
          <h1>Data Siswa SMA Negeri Nusa Bangsa</h1>
        </div>
        <div class="col-4 text-center p-3"><a href="tambah-siswa.php" class="btn btn-dark">+ Tambah Data Siswa</a></div>
    </div>

      <div class="row justify-content-center mt-5">
        <!-- table data siswa -->
        <table id="table_id" class="table table-bordered">
          <thead class="bg-dark text-white">
              <tr>
                  <th>Nomor Induk Sekolah</th>
                  <th>Nama Lengkap</th>
                  <th>Kelas</th>
              </tr>
          </thead>
          <tbody>
            <!-- 1 tr = 1 baris -->
            <!-- looping data siswa yg sudah diambil, simpan ke tr -->
            <?php foreach ($siswa as $key => $value):?>
              <tr>
                  <td><?=$value['nis']?></td>
                  <td><?=$value['nama_lengkap']?></td>
                  <td><?=$value['id_kelas']?></td>
              </tr>
            <?php endforeach?>
          </tbody>
        </table>
      </div>
      <!-- tombol page -->
      <div class="float-right">
        <nav>
          <div class="pagination">
            <!-- prev -->
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>

            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2 </a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <!-- next -->
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </div>
        </nav>
      </div>

      <div class="row">
        <div class="col-12 card p-2">
          <center>Copyrigth &copy Pilketos 2022</center>
        </div>
      </div>
    </div>
  </div>
</div>



</body>
</html>