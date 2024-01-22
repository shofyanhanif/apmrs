<?php
include '../config.php';

$username = $_POST['nik'] ? $_POST['nik'] : '';

$sql = "SELECT COUNT(*) AS countUsr FROM tbl_pasien WHERE NIK = '$username'";
$query = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_array($query);
$count = $row['countUsr'];

echo $count;