<?php
$server = '127.0.0.1';
$username = 'root';
$pass = '';
$database = 'anjungan-rev3';

$koneksi = mysqli_connect($server, $username, $pass, $database);

if (!$koneksi) {
    echo "Koneksi Gagal";
}