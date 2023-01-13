<?php
// panggil file koneksi databse
include 'db.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Pilketos - Login Admin</title>
  </head>
  <body>
    <div class="bungkus">
      <div class="kiri"></div>
      
      <div class="kanan">
        <form action="cek-login-admin.php" method="post" class="form">
          <center><img src="osis.png" width="150"></center>
          <!-- nama -->
          <div class="form-group mt-4" style="width: 80%; margin: auto;">
            <label for="formGroupExampleInput">Username</label>
            <input type="text" name="username" class="form-control" autocomplete="off" placeholder="Masukkan Username">
          </div>
          <div class="form-group mt-3" style="width: 80%; margin: auto;">
          <label for="formGroupExampleInput">Password</label>
          <input type="password" name="password" class="form-control" autocomplete="off" placeholder="Masukkan Password">
          </div>
          <div class="form-group mt-4" style="width: 80%; margin: auto;">
            <input type="submit" class="form-control" value="Login">
            </div>
        </form>
      </div>
    </div>
     <!-- <div class="footer card p-2" style="bottom: 0; margin-top: 260px">
      <center>Copyright &copy Pilketos 2022</center>
    </div> -->
  </body>
</html>