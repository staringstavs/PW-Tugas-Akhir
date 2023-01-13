<?php
// file untuk menerima inout voting dan menyimpan ke database

// sertakan file koneksi database
include 'db.php';

// ambil data input vote, ambil dari input yg memiliki name 'ketos'
$nama_lengkap = $_POST['nama_lengkap'];
// ambil data kelas, ambil dari input yg memiliki name 'kelas'
$kelas = $_POST['kelas'];
$nis = $_POST['nis'];
// var_dump($vote);die;

// masukkan ke database
mysqli_query($db, "INSERT INTO siswa VALUES(NULL, '$kelas', '$nama_lengkap', '$nis', 0)");

// kembali ke halaman data siswa
header('Location:data-siswa.php');
?>