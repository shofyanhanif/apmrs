<?php
include "../config.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Riwayat Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/jquery/jquery_3.5.1.min.js"></script>
    <script src="../assets/js/jam.js"></script>
</head>

<body>
    <!-- Card Tittle -->
    <div class="contianer py-3 px-3">
        <div class="card">
            <div class="card-body p-2">
                <h3 class="card-tittle text-center">CEK RIWAYAT DAFTAR</h3>
                <div class="card-footer">
                    <a href="../index.php" class="text-decoration-none text-dark">BERANDA</a>
                    >
                    <a href="cekdaftar.php" class="text-decoration-none text-dark">DAFTAR</a>
                    >
                    <a href="#" class="text-decoration-none text-dark">CEK STATUS</a>
                </div>
                <h6 id="clock" class="card-text text-end py-1 px-3">
                </h6>
            </div>
        </div>
    </div>
    <!-- End Card -->

    <div class="content text-bg-light"
        style="margin-left: 10px; margin-right: 10px; border-radius: 10px; margin-top: 10px;">
        <br>
        <h3>
            <center>RIWAYAT PENDAFTARAN</center>
        </h3>
        <br>
        <table class="table text-center ml-20 mr-20">
            <thead>
                <tr>
                    <th scope="col">No.RM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Tgl Daftar</th>
                    <th scope="col">Poli Tujuan</th>
                    <th scope="col">No Antrean</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    $rkmmedis = $_GET['cekrkm'];
                    $data = mysqli_query($koneksi, "SELECT a.ID_DAFTAR, a.WAKTU_DAFTAR, a.NO_ANTREAN, b.RKM_MEDIS, c.NAMA_POLI, b.NAMA_PASIEN, b.NIK, b.TGL_LAHIR, b.JENIS_KELAMIN, a.TGL_PENDAFTARAN, b.ALAMAT FROM tbl_pendaftaran AS a JOIN tbl_pasien AS b ON a.RKM_MEDIS=b.RKM_MEDIS JOIN tbl_poli as c ON c.ID_POLI=a.ID_POLI WHERE b.RKM_MEDIS LIKE '%$rkmmedis%'");
                    if (mysqli_num_rows($data) == 0) {
                        echo "<h1 class='text-center'>Anda Belum Pernah Mendaftar Ke Poli</h1>";
                    } else {
                        // Jika data ada, tampilkan data
                        while ($j = mysqli_fetch_array($data)) {
                            echo "<tr>
                        <td hidden>$j[ID_DAFTAR]</td>
                        <td>$j[RKM_MEDIS]</td>
                        <td>$j[NAMA_PASIEN]</td>
                        <td>$j[JENIS_KELAMIN]</td>
                        <td>$j[TGL_PENDAFTARAN]</td>
                        <td>$j[NAMA_POLI]</td>
                        <td>$j[NO_ANTREAN]</td>
                        <td>
                        <a href='print.php?id=$j[ID_DAFTAR]' target='_blank' type='submit' class='btn
                        btn-success'>PRINT</a>
                        </td>
                    </tr>
                    </tr>";
                        }
                    }


                    ?>
                </tr>



            </tbody>

        </table>
        <div class="button text-center">
            <a href="cekdaftar.php">
                <button type="button" class="btn btn-danger"><i class="bi bi-backspace-fill"> KEMBALI</i></button>
            </a>
        </div>
        <br>
        <br>
    </div>
    <a id="inx" href="../index.php"></a>
    <script>
    // Format Waktu 
    document.getElementById('clock').innerHTML = moment().format('LLL');
    // End Format Waktu

    setTimeout(function() {
        window.location.href = $("#inx")[0].href;
    }, 30000);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>