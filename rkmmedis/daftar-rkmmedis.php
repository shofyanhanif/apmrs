<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/select2-4.0.6-rc.1/dist/css/select2.min.css">
    <script src="../assets/jquery/jquery_3.5.1.min.js"></script>
    <script src="../assets/jquery/jquery.validate_1.19.2.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/select2-4.0.6-rc.1/dist/js/select2.min.js"></script>
    <script src="../assets/select2-4.0.6-rc.1/dist/js/i18n/id.js"></script>
    <script src="../assets/js/app.js"></script>
    <script src="../assets/js/validate.js"></script>
    <script src="../assets/js/jam.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"
        integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
    #formdaftar {
        height: 450px;
    }
    </style>
    <?php
    include("../config.php");
    ?>
</head>

<!-- Form -->

<body>
    <!-- Card Tittle -->
    <div class="contianer py-3 px-3">
        <div class="card">
            <div class="card-body p-2">
                <h3 class="card-tittle text-center">DAFTAR PASIEN</h3>
                <div class="card-footer">
                    <a href="../index.php" class="text-decoration-none text-dark">BERANDA</a> >
                    <a href="../poli.php" class="text-decoration-none text-dark">PILIH POLI</a> >
                    <a href="../daftar.php" class="text-decoration-none text-dark">DAFTAR</a>
                    <h5 id="clock" class="text-decoration-none text-dark text-end"></h5>
                </div>


            </div>
        </div>

    </div>

    <div>
        <form action="../proses/daftar-antrian.php" method="POST" class="form-container pt-3" id="formdaftar">
            <!-- <h1 class="textJudul text-center mb-4">Daftar</h1> -->
            <h4 class="textJudul text-center mb-4 mt-2">Ambil No Antrian RSUD Jombang</h4>
            <div class="text-center">
                <button hidden type="button" class="btn btn-primary textForm" onclick="daftar()">Pasien Baru</button>
                <button type="button" class="btn btn-warning textForm">Pasien Lama</button>
                <button type="button" class="btn btn-danger textForm" onclick="kembali()">Kembali</button>
            </div>
            <?php
            $kon = $_GET['poli'];
            $sql = "SELECT * FROM tbl_poli WHERE ID_POLI = '$kon'";
            $query = mysqli_query($koneksi, $sql);

            while ($j = mysqli_fetch_array($query)) {
                //echo "$j[NAMA_POLI]";
                $id = "$j[ID_POLI]";
                $np = "$j[NAMA_POLI]";
                //$tamp = substr($bo, start)
            }

            $sql1 = "SELECT * FROM tbl_pasien ORDER BY tbl_pasien.RKM_MEDIS DESC LIMIT 1";
            $query2 = mysqli_query($koneksi, $sql1);
            $result = mysqli_fetch_assoc($query2);
            $rkmmedis = $result['RKM_MEDIS'];
            ?>

            <div class="mb-3" hidden>
                <label for="exampleFormControlInput1" class="form-label textForm">POLI</label>
                <input name="poli" id="poli" class="form-control" type="text" value="<?php echo $id ?>">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label textForm">POLI</label>
                <input class="form-control" type="text" disabled value="<?php echo $np ?>">
            </div>

            <div class="mb-3" hidden>
                <label for="exampleFormControlInput1" class="form-label textForm">NO REKAM MEDIS</label>
                <input minlength="6" maxlength="6" name="rkmmedis" id="rkmmedis" class="form-control" type="number"
                    value="<?php echo $rkmmedis ?>" placeholder="Masukan Nomer Rekam Medis"
                    aria-label="default input example">
                <div id="result" class="mt-3"></div>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label textForm">NO REKAM MEDIS</label>
                <input disabled minlength="6" maxlength="6" name="rkmmedis" id="rkmmedis" class="form-control"
                    type="number" value="<?php echo $rkmmedis ?>" placeholder="Masukan Nomer Rekam Medis"
                    aria-label="default input example">
                <div id="result" class="mt-3"></div>
            </div>

            <div class="row">
                <div class="d-grid mb-2 mt-2">
                    <input type="submit" class="tombol submit btn btn-primary textForm" value="SUBMIT">
                </div>
            </div>
            <!-- Register buttons -->
            <div class="row text-center">
                <p>Belum Punya Nomor Rekam Medis <a href="../daftar.php">Daftar Disini</a></p>
                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                </button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        // $('.tombol').hide(0);
        // $('input[type="submit"]').attr('disabled', 'disabled');
        $('#rkmmedis').keyup(function() {
            var rkmmedis = $('#rkmmedis').val();
            if (rkmmedis == 0) {
                // $('.tombol').hide(0);
                // $('input[type="submit"]').attr('disabled', 'disabled');
                // $('#result').text('').removeClass();

            } else {
                $.ajax({
                    url: 'cek.php',
                    type: 'POST',
                    data: 'rkmmedis=' + rkmmedis,
                    success: function(hasil) {
                        if (hasil > 0) {
                            $('#result').text('Rekam Medis Valid');
                            // $('.tombol').show('fast');
                            // $('input[type="submit"]').removeAttr('disabled');
                        } else {
                            $('#result').text('Nomor Rekam Medis Tidak Valid');
                        }
                    }
                });
            }
        });
    });
    </script>
    <script>
    function daftar() {
        location.replace("daftar.php");
    }

    function kembali() {
        location.replace("../poli.php");
    }



    // Format Waktu 
    document.getElementById('clock').innerHTML = moment().format('LLL');
    // End Format Waktu
    </script>
</body>

</html>