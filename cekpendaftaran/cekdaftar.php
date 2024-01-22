<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cek Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/jquery/jquery_3.5.1.min.js"></script>
    <script src="../assets/jquery-validation-1.19.3/dist/jquery.validate.min.js"></script>
    <!-- jam -->
    <script src="../assets/momentjs/moment.min.js"></script>
    <script src="../assets/momentjs/moment-timezone-with-data.js"></script>
    <script src="../assets/momentjs/moment-timezone-with-data-1970-2030.js"></script>
    <script src="../assets/momentjs/moment.locale.js"></script>
    <script src="../assets/momentjs/jam.js"></script>
    <!-- end jam -->

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
                    <a href="#" class="text-decoration-none text-dark">DAFTAR</a>
                </div>
                <h6 id="clock" class="card-text text-end py-1 px-3">
                </h6>
            </div>
        </div>
        <div class="text-center mt-3">
            <a href="../index.php" class="btn btn-danger btn-lg">KEMBALI</a>
        </div>
    </div>
    <!-- End Card -->

    <div class="content text-bg-light"
        style="margin-left: 10px; margin-right: 10px; border-radius: 10px; margin-top: 10px;">
        <br>
        <h3>
            <center>Riwayat Pendaftaran</center>
            <center>Masukkan 6 digit No. Rekam Medis</center>
            <!-- <center>NIK (untuk pasien baru) dan tanggal lahir anda</center> -->
        </h3>
        <br>
        <div class="label" style="margin-left: 200px; margin-right: 200px; height: 200px;">
            <form action="cekstatus.php" method="get" id="cekform">
                <div class="row mb-3">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">No.RM</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control form-control-sm" name="cekrkm"
                            placeholder="MASUKAN NOMER REKAM MEDIS">
                    </div>
                </div>
                <div class="row mb-3">
                    <!-- <label for="colFormLabel" class="col-sm-2 col-form-label">Tgl Lahir</label> -->
                    <!-- <div class="col-sm-10">
                        <input type="date" class="form-control" name="tgllahir" id="tgllahir">
                    </div> -->
                    <div class="col" align="center" style="margin-top: 10px;">
                        <input type="submit" class="btn btn-primary" value="CEK STATUS">
                    </div>
                </div>
            </form>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>
        <script>
        $("#cekform").validate({
            rules: {
                cekrkm: {
                    required: true,
                    minlength: 6,
                    maxlength: 6

                }
            },
            messages: {
                cekrkm: "<span style='color:red'>Masukan Nomer Rekam Medis</span>"
            },
            errorElement: "span",
        })
        </script>
</body>

</html>