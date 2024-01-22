<?php
include("../config.php");
switch ($_GET['jenis']) {
        //ambil data kota / kabupaten
    case 'kota':
        $id_provinces = $_POST['id_provinces'];
        if ($id_provinces == '') {
            exit;
        } else {
            $getcity = mysqli_query($koneksi, "SELECT * FROM tbl_kabupaten WHERE ID_PROV ='$id_provinces' ORDER BY NAMA_KAB ASC") or die('Query Gagal');
            while ($data = mysqli_fetch_array($getcity)) {
                echo '<option value="' . $data['ID_KAB'] . '">' . $data['NAMA_KAB'] . '</option>';
            }
            exit;
        }
        break;

        //ambil data kecamatan
    case 'kecamatan':
        $id_regencies = $_POST['id_regencies'];
        if ($id_regencies == '') {
            exit;
        } else {
            $getcity = mysqli_query($koneksi, "SELECT * FROM tbl_kecamatan WHERE ID_KAB ='$id_regencies' ORDER BY NAMA_KEC ASC") or die('Query Gagal');
            while ($data = mysqli_fetch_array($getcity)) {
                echo '<option value="' . $data['ID_KEC'] . '">' . $data['NAMA_KEC'] . '</option>';
            }
            exit;
        }
        break;


        //ambil data kelurahan
    case 'kelurahan':
        $id_district = $_POST['id_district'];
        if ($id_district == '') {
            exit;
        } else {
            $getcity = mysqli_query($koneksi, "SELECT  * FROM tbl_kelurahan WHERE ID_KEC ='$id_district' ORDER BY NAMA_KEL ASC") or die('Query Gagal');
            while ($data = mysqli_fetch_array($getcity)) {
                echo '<option value="' . $data['ID_KEL'] . '">' . $data['NAMA_KEL'] . '</option>';
            }
            exit;
        }
        break;
}