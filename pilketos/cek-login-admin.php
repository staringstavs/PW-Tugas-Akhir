<?php
// file untuk cek login data admin

// masukan koneksi ke database
include 'db.php';
// ambil data dari login terlebih dahulu, dari input yg memiliki nama 'username' dan 'password'
$username = $_POST['username'];
$password = md5($_POST['password']); //ubah password yg diinput jadi enkripsi md5 (karna di database juga dienkripsi md5)

// cek data dari database tabel admin
// pilih semua data dari tabel admin yg nis nya sama seperti nis yg diinputkan, dan status masih 0
$admin = mysqli_query($db, "SELECT * FROM admin WHERE username = '$username' AND password = '$password' ");

// bila data admin ada (tidak kosong) , arahkan ke halaman voting
if (mysqli_num_rows($admin) > 0) {

	// pindah ke halaman voting
	header('Location:dashboard.php');
}else{
	header('Location:index.php');
}
?>