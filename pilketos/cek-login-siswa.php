<?php
// file untuk cek login data siswa

// masukan koneksi ke database
include 'db.php';
// ambil data dari login terlebih dahulu, dari input yg memiliki nama 'nis'
$nis = $_POST['nis'];

// cek data dari database tabel siswa
// pilih semua data dari tabel siswa yg nis nya sama seperti nis yg diinputkan, dan status masih 0
// jika statusnya 0 maka boleh voting
$cek = mysqli_query($db, "SELECT * FROM siswa WHERE nis = $nis AND status = 0");

// bila data siswa ada (tidak kosong) , arahkan ke halaman voting
if (mysqli_num_rows($cek) > 0) {
	// simpan data kelas dari siswa yg login ke cache ketika sudah login
	$data = mysqli_fetch_assoc($cek);
	session_start();
	$_SESSION['id_kelas'] = $data['id_kelas'];

	// update status siswa dengan nis yg sama menjadi 1 ketika sudah login
	mysqli_query($db, "UPDATE `siswa` SET `status` = '1' WHERE `siswa`.`nis` = $nis");

	// pindah ke halaman voting
	header('Location:pilih-calon.php');
}else{
	// jika tidak ada data, kembali ke halaman login-siswa
	header('Location:login-siswa.php');
}
?>