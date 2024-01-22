<?php
include '../config.php';

if (isset($_GET['nik'], $_GET['tgllahir'])) {
    $nik = $_GET['nik'];
    $tgllahir = $_GET['tgllahir'];

    // Mengambil data dari database
    $query = "SELECT * FROM tbl_pasien WHERE NIK = '$nik' and TGL_LAHIR = '$tgllahir' LIMIT 1";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($result);

    // Mengirim data ke AJAX
    header('Content-Type: application/json');
    echo json_encode($data);
}