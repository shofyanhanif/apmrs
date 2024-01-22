<?php
include '../config.php';

$username = $_POST['rkmmedis'] ? $_POST['rkmmedis'] : '';

$sql = "SELECT COUNT(*) AS countUsr FROM tbl_pasien WHERE RKM_MEDIS = '$username'";
$query = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_array($query);
$count = $row['countUsr'];

echo $count;