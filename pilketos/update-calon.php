<?php
// file untuk menerima inout voting dan menyimpan ke database

// sertakan file koneksi database
include 'db.php';

// ambil data input
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$visi = $_POST['visi'];
$id_calon = $_POST['id_calon'];

// update data calon
mysqli_query($db, "UPDATE `calon` SET `id_kelas` = '$kelas', `nama_calon` = '$nama', `visi_misi` = '$visi' WHERE `calon`.`id` = $id_calon");


//hapus cache dan keluar ke halaman login siswa
header('Location:data-calon.php');
?>