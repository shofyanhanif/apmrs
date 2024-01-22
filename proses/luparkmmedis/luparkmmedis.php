<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/select2-4.0.6-rc.1/dist/css/select2.min.css">
    <script src="../../assets/jquery/jquery_3.5.1.min.js"></script>
    <script src="../../assets/jquery/jquery.validate_1.19.2.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/select2-4.0.6-rc.1/dist/js/select2.min.js"></script>
    <script src="../../assets/select2-4.0.6-rc.1/dist/js/i18n/id.js"></script>
    <script src="../../assets/js/app.js"></script>
    <script src="../../assets/js/validate.js"></script>
    <script src="../../assets/js/jam.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"
        integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
    #formdaftar {
        height: 450px;
    }
    </style>
    <?php
    include("../../config.php");
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
                    <a href="../../daftar.php" class="text-decoration-none text-dark">DAFTAR</a>
                    <h5 id="clock" class="text-decoration-none text-dark text-end"></h5>
                </div>


            </div>
        </div>

    </div>

    <div>
        <form action="lupa.php" method="GET" class="form-container pt-3" id="formdaftar">
            <h4 class="textJudul text-center mb-4 mt-2">Lupa Nomer Rekam Medis</h4>
            <div class="text-center">
                <button hidden type="button" class="btn btn-primary textForm" onclick="daftar()">Pasien Baru</button>
                <button type="button" class="btn btn-warning textForm" onclick="lupa()">LUPA NOMER REKAM MEDIS</button>
                <button type="button" class="btn btn-danger textForm" onclick="kembali()">KEMBALI</button>
            </div>


            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label textForm">NOMOR NIK</label>
                <input name="nik" id="nik" class="form-control" type="text" value="">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label textForm">TANGGAL LAHIR</label>
                <input name="tgl" id="tgl" class="form-control" type="date" value="">
            </div>

            <div class="row">
                <div class="d-grid mb-2 mt-2">
                    <input type="submit" class="tombol submit btn btn-primary textForm" value="SUBMIT">
                </div>
            </div>
        </form>
    </div>

    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <input type="email" id="defaultForm-email" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
                    </div>

                    <div class="md-form mb-4">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <input type="password" id="defaultForm-pass" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-default">Login</button>
                </div>
            </div>
        </div>
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
        location.replace("../../poli.php");
    }



    // Format Waktu 
    document.getElementById('clock').innerHTML = moment().format('LLL');
    // End Format Waktu
    </script>
</body>

</html>