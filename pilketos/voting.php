<?php
// file untuk menerima inout voting dan menyimpan ke database

// sertakan file koneksi database
include 'db.php';

// ambil data input vote, ambil dari input yg memiliki name 'ketos'
$vote = $_POST['ketos'];
// ambil data kelas, ambil dari input yg memiliki name 'kelas'
$kelas = $_POST['kelas'];

// masukkan ke database
mysqli_query($db, "INSERT INTO voting VALUES(NULL, '$vote', '$kelas')");


//hapus cache dan keluar ke halaman login siswa
header('Location:login-siswa.php');
?>