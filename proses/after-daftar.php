<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>After Daftar</title>
    <?php include 'head.php'; ?>


</head>

<body>
    <?php
    include "../assets/phpqrcode/qrlib.php";
    include "../config.php";
    $sql = "SELECT * FROM tbl_pasien ORDER BY tbl_pasien.RKM_MEDIS DESC LIMIT 1";
    $query = mysqli_query($koneksi, $sql);
    $result = mysqli_fetch_array($query);
    $rkmmedis = $result['RKM_MEDIS'];
    $nama = $result['NAMA_PASIEN'];
    $tgldaftar = $result['TGL_DAFTAR'];
    $generate = $rkmmedis . '/' . $nama . '/' . $tgldaftar
    ?>
</body>





<body>
    <!-- Card Tittle -->
    <div class="contianer py-3 px-3">
        <div class="card">
            <div class="card-body p-2">
                <h3 class="card-tittle text-center">DAFTAR PASIEN</h3>
                <div class="card-footer">
                    <a href="../index.php" class="text-decoration-none text-dark">BERANDA</a> >
                    <a href="../rkmmedis/poli-rkmmedis.php" class="text-decoration-none text-dark">PILIH POLI</a> >
                    <h5 id="clock" class="text-decoration-none text-dark text-end"></h5>
                </div>
            </div>
        </div>
        <div class="text-center mt-3">
            <a href="../rkmmedis/poli-rkmmedis.php" type="button" class="btn btn-warning btn-lg">PILIH POLI TUJUAN</a>
            <div type="button" class="btn btn-danger btn-lg" onclick="kembali()">KEMBALI</div>
        </div>
    </div>

    <!-- End Card -->

    <br>
    <br>
    <div class="content text-bg-light"
        style="margin-left: 100px; margin-right: 100px; border-radius: 20px; margin-top: -50px;">
        <div class="nav justify-content-center" style="margin-top: -10px; border-radius: 5px;">
        </div>
        <table class="table text-center">
            <tbody>
                <tr>
                    <td>
                        <h3>HASIL PENDAFTARAN</h3> <br>
                        ======================= <br>
                        No Rekam Medis : <?php echo $rkmmedis ?> <br>
                        Nama Pasien : <?php echo $nama ?> <br>
                        Tanggal Daftar : <?php echo $tgldaftar ?> <br>
                        ======================= <br>
                        SCAN ME <br><br>
                        <?php
                        // nama folder tempat penyimpanan file qrcode
                        $penyimpanan = "../temp/";

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
                        <br>
                        <br>
                        <a href="print/daftar.php" target="_blank">
                            <button type="button" class="btn btn-primary"><i class="bi bi-printer-fill">
                                    Cetak</i></button>
                        </a>
                    </td>
                </tr>

            </tbody>
        </table>
        <a id="inx" href="../index.php"></a>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script>
    setTimeout(function() {
        window.location.href = $("#inx")[0].href;
    }, 15000);


    const myModal = document.querySelector('#myModal');

    function daftar() {
        location.replace("poli-rkmmedis.php");
    }

    function kembali() {
        location.replace("../index.php");
    }
    document.getElementById('clock').innerHTML = moment().format('LLL');
    </script>

</body>

</html>