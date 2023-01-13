<?php
// panggil file koneksi databse
include 'db.php';
// ambil id calon ketos yg ingin diedit dari url
$id = $_GET['id'];
// ambil data seblumnya mengenai calon dari database
$data = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM calon WHERE id = $id"));
// ambil data kelas dari tabel siswa
$kelas = mysqli_query($db, "SELECT id_kelas FROM siswa GROUP BY id_kelas");
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
              <h1>Edit Data Calon Ketua Osis</h1>
            </div>
            <div class="col-4 text-center p-3"><a href="data-calon.php" class="btn btn-dark"><- Kembali</a></div>
        </div>
      
      <div class="row justify-content-center">
        <div class="col-10 card shadow">
           <div class="card-body">
             <!-- form jika ditekan tombol submit akan mengarah ke halaman data calon -->
             <form action="update-calon.php" method="post">
              <input type="hidden" name="id_calon" value="<?=$id?>">
                <!-- foto -->
                <!-- <div class="form-group">
                    <label for="formGroupExampleInput">Foto Calon Ketua Osis (3x4)</label>
                    <input type="file" class="form-control" id="formGroupExampleInput" placeholder="Example input" style="height: 100%;">
                </div> -->
                <!-- nama -->
                <div class="form-group">
                  <label for="formGroupExampleInput">Nama Lengkap</label>
                  <input type="text" name="nama" class="form-control" value="<?=$data['nama_calon']?>" placeholder="Masukkan Nama Lengkap...">
                </div>
                <!-- kelas -->
                <div class="form-group">
                  <label for="formGroupExampleInput2">Kelas</label>
                  <select class="form-control" name="kelas">
                    <option>-- Pilih Kelas --</option>
                    <?php foreach ($kelas as $key => $value): ?>
                    <option value="<?=$value['id_kelas']?>" <?=$value['id_kelas'] == $data['id_kelas']? 'selected' : ''?>><?=$value['id_kelas']?></option>
                    <?php endforeach ?>?>
                    
                  </select>
                </div>
                <!-- visi misi -->
                <div class="form-group">
                    <label for="formGroupExampleInput">Visi & Misi Kerja Calon Ketua Osis</label>
                    <textarea name="visi" class="form-control" cols="10" rows="5"><?=$data['visi_misi']?></textarea>
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