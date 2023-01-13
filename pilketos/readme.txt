A.Halaman Admin

Dimulai dari index.php, nanti diarahkan ke dashboard.php.

Untuk Tampilan pengaturan calon ketos ada di data-calon.php,
form tambah ketos ada di form-calon.php

Untuk list data siswa ada di data-siswa.php


B. Halaman Pemilih/Siswa

Dimulai dari login-siswa.php, nanti diarahkan ke halama pilih-calon.php

dari pilih calon, nanti button mengarah lagi ke login-siswa.php


*Catatan Penting
1. Ini stylingnya sebagian pakai bootstrap yang online, jadi pastikan ada koneksi internet pas buka projeknya.
2. Bootstrap adalah style.css yang disediakan di online oleh company Bootstrap.
3. Link Bootstrapp ada yang css dan javascript. Yang CSS disimpen di head, sedangkan javascriptnya disimpen di dalam body html

4. Di projek ini bootstrap banya di pake di pengaturan tata letak, supaya bisa enak ngebagi konten dalam 1 halamannya.
5. Aturan tata letak dasar dari boostrap yaitu dimulai daro container > row > col.
    container sebagai pembungkus,
    row sebagai pengaturan tata letak yg mengurut dari atas ke bawah,
    col sebagai pengatur tata letak ke samping.

    1 container bisa berisikan banyak row,
    1 row bisa berisikan banyak col (dengan syarat jumlah col maksimal ada 12 col, misal : col-6 & col-6, col-4 & col-4 & col-4),
    di dalam col bisa diisikan konten yang dibutuhkan, misal : text, form, gambar, etc.