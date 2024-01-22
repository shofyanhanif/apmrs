<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pilih Poli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/select2-4.0.6-rc.1/dist/css/select2.min.css">
    <script src="assets/jquery/jquery_3.5.1.min.js"></script>
    <script src="assets/jquery/jquery.validate_1.19.2.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/select2-4.0.6-rc.1/dist/js/select2.min.js"></script>
    <script src="assets/select2-4.0.6-rc.1/dist/js/i18n/id.js"></script>
    <script src="assets/js/app.js"></script>
    <!-- jam -->
    <script src="assets/momentjs/moment.min.js"></script>
    <script src="assets/momentjs/moment-timezone-with-data.js"></script>
    <script src="assets/momentjs/moment-timezone-with-data-1970-2030.js"></script>
    <script src="assets/momentjs/moment.locale.js"></script>
    <script src="assets/momentjs/jam.js"></script>
    <!-- end jam -->
    <script src="assets/datepicker/daterangepicker.js"></script>
    <link rel="stylesheet" href="assets/datepicker/daterangepicker.css">
    <!-- End Date Picker -->
    <style>
    #formdaftar {
        height: 450px;
    }
    </style>
    <?php
    include("config.php");
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
                    <a href="index.php" class="text-decoration-none text-dark">BERANDA</a> >
                    <a href="poli.php" class="text-decoration-none text-dark">PILIH POLI</a> >
                    <a href="daftar.php" class="text-decoration-none text-dark">DAFTAR</a>
                    <h5 id="clock" class="text-decoration-none text-dark text-end"></h5>
                </div>


            </div>
        </div>

    </div>

    <div>
        <form action="proses/daftar-antrian.php" method="POST" class="form-container pt-3" id="formdaftar">
            <!-- <h1 class="textJudul text-center mb-4">Daftar</h1> -->
            <h4 class="textJudul text-center mb-4 mt-2">Ambil Nomer Antrian RSUD Jombang</h4>
            <div class="text-center">
                <button hidden type="button" class="btn btn-primary textForm" onclick="daftar()">Pasien Baru</button>
                <button type="button" class="btn btn-primary textForm">PASIEN LAMA</button>
                <button type="button" class="btn btn-warning textForm" data-bs-toggle="modal"
                    data-bs-target="#modalluparkmmedis">LUPA NOMER REKAM MEDIS</button>
                <button type="button" class="btn btn-danger textForm" onclick="kembali()">KEMBALI</button>

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
            ?>

            <div class="mb-3" hidden>
                <label for="exampleFormControlInput1" class="form-label textForm">POLI</label>
                <input name="poli" id="poli" class="form-control" type="text" value="<?php echo $id ?>">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label textForm">POLI</label>
                <input class="form-control" type="text" disabled value="<?php echo $np ?>">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label textForm">NO REKAM MEDIS</label>
                <input minlength="6" maxlength="6" name="rkmmedis" id="rkmmedis" class="form-control" type="number"
                    value="" placeholder="Masukan Nomer Rekam Medis" aria-label="default input example">
                <div id="result" class="mt-3"></div>
            </div>

            <div class="row">
                <div class="d-grid mb-2 mt-2">
                    <input type="submit" class="tombol submit btn btn-primary textForm" value="SUBMIT">
                </div>
            </div>
            <!-- Register buttons -->
            <div class="row text-center">
                <p>Belum Punya Nomor Rekam Medis <a href="daftar.php">Daftar Disini</a></p>
                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                </button>
            </div>
        </form>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalluparkmmedis" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">LUPA NOMOR REKAM MEDIS</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-2">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <label data-error="wrong" data-success="right" for="defaultForm-email">MASUKAN NO NIK
                            KTP</label>
                        <input type="text" id="nik" class="form-control validate">

                    </div>

                    <div class="md-form mb-4">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <label data-error="wrong" data-success="right" for="defaultForm-pass">TANGGAL LAHIR</label>
                        <input type="text" id="tgllahir" class="form-control validate">
                        <span id="tdktersedia" class="text-danger"></span>

                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="btnbatal">BATAL</button>
                    <button type="submit" class="btn btn-primary" id="btnlupa">SUBMIT</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        // $('.tombol').hide(0);
        $('input[type="submit"]').attr('disabled', 'disabled');
        $('#rkmmedis').keyup(function() {
            var rkmmedis = $('#rkmmedis').val();
            if (rkmmedis == 0) {
                // $('.tombol').hide(0);
                $('input[type="submit"]').attr('disabled', 'disabled');
                $('#result').text('').removeClass();

            } else {
                $.ajax({
                    url: 'proses/cek-rkmmedis.php',
                    type: 'POST',
                    data: 'rkmmedis=' + rkmmedis,
                    success: function(hasil) {
                        if (hasil > 0) {
                            $('#result').text('Rekam Medis Valid').removeClass(
                                'alert alert-danger').addClass(
                                'alert alert-success mt-2');
                            $('.tombol').show('fast');
                            $('input[type="submit"]').removeAttr('disabled');
                        } else {
                            $('#result').text('Nomor Rekam Medis Tidak Valid').removeClass(
                                'alert alert-success').addClass(
                                'alert alert-danger mt-2');
                            // $('.tombol').hide('');
                            $('input[type="submit"]').attr('disabled', 'disabled');
                        }
                    }
                });
            }
        });
    });
    </script>
    <script>
    // Plugin Date Picker
    $(function() {

        $('#tgllahir').daterangepicker({
            autoUpdateInput: false,
            showDropdowns: true,
            singleDatePicker: true,
            locale: {
                cancelLabel: 'Clear'
            }
        });

        $('#tgllahir').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('YYYY/MM/DD'));
        });

    });


    // Fungsi Lupa Nomor Rekam Medis
    $(document).ready(function() {
        // Menampilkan data saat tombol ditekan
        $("#btnlupa").click(function() {
            // Mendapatkan ID data dari form
            var nik = $("#nik").val();
            var tgllahir = $("#tgllahir").val();
            // Menampilkan data menggunakan AJAX
            $.ajax({
                url: "proses/luparkmmedis/lupa.php?nik=" + nik + "&tgllahir=" + tgllahir,
                method: "GET",
                dataType: "json",
                success: function(data) {
                    if (data === null) {
                        // jika data null, tampilkan pesan "Data tidak tersedia"
                        $("#tdktersedia").html(
                            "Data pasien tidak tersedia, silahkan cek kembali Nomor KTP dan Tgl Lahir"
                        );
                        // alert("Data berhasil ditampilkan!");
                    } else {
                        // jika data tidak null, tampilkan data
                        $("#rkmmedis").val(data.RKM_MEDIS);
                        $('input[type="submit"]').removeAttr('disabled');
                        $('#btnbatal').click();
                    }
                }
            });
        });
    });
    // End Fungsi Lupa Nomor Rekam Medis
    </script>
    <script>
    function daftar() {
        location.replace("daftar.php");
    }

    function kembali() {
        location.replace("poli.php");
    }

    function lupa() {
        location.replace("proses/luparkmmedis/luparkmmedis.php");
    }
    </script>
</body>

</html>