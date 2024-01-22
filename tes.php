<?php
include 'config.php';
$query = mysqli_query($koneksi, "SELECT max(RKM_MEDIS) as max_id FROM tbl_pasien WHERE RKM_MEDIS ORDER BY RKM_MEDIS DESC
LIMIT 1");
$data = mysqli_fetch_assoc($query);
$getId = $data['max_id'];


$no = substr($getId, -6, 6);
// Selanjutnya kita convert ke tipe data Integer agar bisa di Increment (ditambah)
$no = (int) $no;
// Ditambah 1
$no += 1;
$newId = sprintf("%03s", $no);

echo $newId;