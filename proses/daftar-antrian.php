<?php
include "../config.php";
$poli = $_POST['poli'];
$rkmmedis = $_POST['rkmmedis'];
$date = date('Y-m-d');



// Generate No Antrean
$query = mysqli_query($koneksi, "SELECT MAX(NO_ANTREAN) as no_antrean FROM tbl_pendaftaran WHERE TGL_PENDAFTARAN='$date' AND ID_POLI='$poli'");
$data = mysqli_fetch_assoc($query);
$getId = $data['no_antrean'];
$no = substr($getId, -6, 6);
$no = (int) $no;
$no += 1;
$noantrean = sprintf("%01s", $no);
// End No Antrean

// Generate ID Daftar
$query1 = mysqli_query($koneksi, "SELECT MAX(ID_DAFTAR) as no_id FROM tbl_pendaftaran");
$data1 = mysqli_fetch_assoc($query1);
$getId2 = $data1['no_id'];
$no1 = substr($getId2, -6, 6);
$no1 = (int) $no1;
$no1 += 1;
$id = sprintf("%01s", $no1);
// End ID Daftar

$sql = "INSERT INTO tbl_pendaftaran VALUES ('$id','$poli','$rkmmedis','$noantrean','$date',CURRENT_TIME())";
$tmbh = mysqli_query($koneksi, $sql);

if ($tmbh) {
    echo ("<script>
    window.alert('Data Berhasil Ditambahkan !');
    window.location.href='after-antrian.php';
    </script>");
} else {
    echo ("<script>
    window.alert('PENDAFTARAN TIDAK BERHASIL SILAHKAN ULANGI LAGI');
    window.location.href='../daftar.php';
    </script>");
}