<?php
include "../../assets/phpqrcode/qrlib.php";
include "../../config.php";
$sql = "SELECT * FROM tbl_pasien ORDER BY tbl_pasien.RKM_MEDIS DESC LIMIT 1";
$query = mysqli_query($koneksi, $sql);
$result = mysqli_fetch_array($query);
$rkmmedis = $result['RKM_MEDIS'];
$nama = $result['NAMA_PASIEN'];
$tgldaftar = $result['TGL_DAFTAR'];
$generate = $rkmmedis . '/' . $nama . '/' . $tgldaftar
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="../../assets/jquery/jquery_3.5.1.min.js"></script>
    <title>After Daftar</title>
    <?php include '../head.php' ?>
</head>

<table class="table text-center">
    <tbody>
        <tr>
            <td>
                <h3>DATA DIRI PASIEN</h3> <br>
                ======================= <br>
                No Rekam Medis : <?php echo $rkmmedis ?> <br>
                Nama Pasien : <?php echo $nama ?> <br>
                Tanggal Daftar : <?php echo $tgldaftar ?> <br>
                ======================= <br>
                SCAN ME <br><br>
                <?php
                // nama folder tempat penyimpanan file qrcode
                $penyimpanan = "../../temp/";

                // membuat folder dengan nama "temp"
                if (!file_exists($penyimpanan))
                    mkdir($penyimpanan);


                // perintah untuk membuat qrcode dan menyimpannya dalam folder temp
                // atur level pemulihan datanya dengan QR_ECLEVEL_L | QR_ECLEVEL_M | QR_ECLEVEL_Q | QR_ECLEVEL_H
                // atur pixel qrcode pada parameter ke 4
                // atur jarak frame pada parameter ke 5

                QRcode::png($generate, $penyimpanan . 'terbaru_qrcode.png', QR_ECLEVEL_L, 7, 3);

                // menampilkan qrcode 

                echo '<img src="' . $penyimpanan . 'terbaru_qrcode.png">';
                ?>
            </td>
        </tr>

    </tbody>
</table>

<script>
window.print();
setTimeout(function() {
    window.close();
}, 10000);
</script>