<?php
include "../config.php";
$nik = $_POST['nik'];
$nama = strtoupper($_POST['nama']);
$telp = $_POST['telp'];
$tgllahir = $_POST['tgllahir'];
$alamat = strtoupper($_POST['alamat']);
$prov = $_POST['provinsi'];
$kota = $_POST['kota'];
$kec = $_POST['kecamatan'];
$kel = $_POST['kelurahan'];
$jeniskelamin = $_POST['jeniskelamin'];
$time = date('Y-m-d h:i:s');

// Generate No Rekam Medis
$query = mysqli_query($koneksi, "SELECT max(RKM_MEDIS) as max_id FROM tbl_pasien WHERE RKM_MEDIS ORDER BY RKM_MEDIS DESC
LIMIT 1");
$data = mysqli_fetch_assoc($query);
$getId = $data['max_id'];
$no = substr($getId, -6, 6);
$no = (int) $no;
$no += 1;
$rkmmedis = sprintf("%03s", $no);
// End Rekam Medis

$sql = "INSERT INTO tbl_pasien VALUES ($rkmmedis,'$kota','$prov','$kec','$kel','$nama','$nik','$tgllahir','$jeniskelamin','$time','$telp','$alamat')";
$tmbh = mysqli_query($koneksi, $sql);

if ($tmbh) {
    echo ("<script>
    window.alert('Data Berhasil Ditambahkan !');
    window.location.href='after-daftar.php';
    </script>");
} else {
    echo ("<script>
    window.alert('PENDAFTARAN TIDAK BERHASIL SILAHKAN ULANGI LAGI');
    window.location.href='../daftar.php';
    </script>");
}