<?php
// panggil file koneksi databse
include 'db.php';
// ambil data calon dari tabel calon
$calon = mysqli_query($db, "SELECT * FROM calon");

// ambil data kelas dari tabel siswa
$kelas = mysqli_query($db, "SELECT id_kelas FROM siswa GROUP BY id_kelas");

$vote_aldi = mysqli_fetch_assoc(mysqli_query($db, "SELECT count(id_calon) as total FROM voting WHERE id_calon = 1"));
$vote_intan = mysqli_fetch_assoc(mysqli_query($db, "SELECT count(id_calon) as total FROM voting WHERE id_calon = 2"));

$vote_aldi_a = mysqli_fetch_assoc(mysqli_query($db, "SELECT count(id_calon) as total_a FROM voting WHERE id_calon = 1 AND id_kelas = 'X IPA A'"));
$vote_intan_a = mysqli_fetch_assoc(mysqli_query($db, "SELECT count(id_calon) as total_a FROM voting WHERE id_calon = 2 AND id_kelas = 'X IPA A'"));

$vote_aldi_b = mysqli_fetch_assoc(mysqli_query($db, "SELECT count(id_calon) as total_b FROM voting WHERE id_calon = 1 AND id_kelas = 'X IPA B'"));
$vote_intan_b = mysqli_fetch_assoc(mysqli_query($db, "SELECT count(id_calon) as total_b FROM voting WHERE id_calon = 2 AND id_kelas = 'X IPA B'"));
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
    <li style="margin-top: 50px;"><a class="active" href="dashboard.php">Dashboard</a></li>
    <li><a href="data-calon.php">Data Calon</a></li>
    <li><a href="data-siswa.php">Data Siswa</a></li>
    <li style="margin-top:500px"><a class="logout" href="index.php"><center><b><- Logout</b></center></a></li>
  </ul>
 </div>
  
  <div class="data-kanan">
    <div class="container-fluid">
      <div class="row text-white">
        <div class="col-8 bg-dark display-3 p-3">
          Total Siswa SMA Nusa Bangsa
        </div>
        <div class="col-4 text-center bg-dark display-3 p-3"><b>1.250 Siswa</b></div>
      </div>

      <div class="row justify-content-center mt-3">
        <!-- calon 1 -->
        <?php foreach ($calon as $key => $value):?>
        <div class="col-md-5 calon m-3 p-3">
          <div class="row">
            <div class="col-4"><img src="<?=$value['foto']?>" width="100%" style="border-radius:10px; border: 2px solid black"></div>
            <div class="col-8">
              <h1><?=$value['nama_calon']?></h1>
              <h5>Kelas <?=$value['id_kelas']?></h5>
              <p><?=$value['visi_misi']?></p>
            </div>
          </div>
        </div>
        <?php endforeach?>
      </div>

      <div class="row justify-content-center mt-3">
        <div class="col-8">
            <canvas id="diagramBatang"></canvas>
        </div>
        <div class="col-4">
          <canvas id="diagramPie"></canvas>
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



<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const diagramBatang = document.getElementById('diagramBatang');

  new Chart(diagramBatang, {
    type: 'bar',
    data: {
      labels: [<?php foreach ($kelas as $key => $value):?>'<?=$value['id_kelas']?>',<?php endforeach?>],
      datasets: [{
        label: 'Aldi',
        data: [<?=$vote_aldi_a['total_a']?>, <?=$vote_aldi_b['total_b']?>],
        borderWidth: 1,
        backgroundColor: '#000000'
      }, 
      {
        label: 'Intan',
        data: [<?=$vote_intan_a['total_a']?>, <?=$vote_intan_b['total_b']?>],
        borderWidth: 1,
        borderColor: '#000000'
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

  // diagram Pie
  const diagramPie = document.getElementById('diagramPie');

  new Chart(diagramPie, {
    type: 'pie',
    data: {
      labels: [<?php foreach ($calon as $key => $value):?>'<?=$value['nama_calon']?>',<?php endforeach?>],
      datasets: [{
        data: [<?=$vote_aldi['total']?>, <?=$vote_intan['total']?>],
        borderWidth: 1,
        backgroundColor:['#000000', '#ffffff'],
        borderColor:['#ffffff','#000000']
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

</body>
</html>