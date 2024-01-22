<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/select2-4.0.6-rc.1/dist/css/select2.min.css">
    <script src="assets/jquery/jquery_3.5.1.min.js"></script>
    <script src="assets/jquery-validation-1.19.3/dist/jquery.validate.min.js"></script>
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
    <?php
    include("config.php");
    ?>
</head>


<!-- Sofyan -->

<body>
    <!-- Card Tittle -->
    <div class="contianer py-3 px-3">
        <div class="card">
            <div class="card-body p-2">
                <h3 class="card-tittle text-center">DAFTAR PASIEN BARU</h3>
                <div class="card-footer">
                    <a href="index.php" class="text-decoration-none text-dark">BERANDA</a> > <a href="daftar.php"
                        class="text-decoration-none text-dark">DAFTAR</a>
                </div>
                <h5 id="clock" class="text-decoration-none text-dark text-end"></h5>
            </div>
        </div>
    </div>
    <!-- End Card -->

    <!-- Form Daftar -->
    <div>
        <form action="proses/tambah-pasien.php" method="POST" class="form-container" id="daftar">
            <!-- <h1 class="textJudul text-center mb-4">Daftar</h1> -->
            <h4 class="textJudul text-center mb-4 mt-2">Silakan Isi Data Diri</h4>
            <div class="text-center">
                <button type="button" class="btn btn-primary textForm">Pasien Baru</button>
                <button hidden type="button" class="btn btn-warning textForm" onclick="daftarpoli()">Pasien
                    Lama</button>
                <button type="button" class="btn btn-danger textForm" onclick="kembali()">Kembali</button>
            </div>
            <!-- Form Isian -->
            <?php
            $query = mysqli_query($koneksi, "SELECT max(RKM_MEDIS) as max_id FROM tbl_pasien WHERE RKM_MEDIS ORDER BY RKM_MEDIS DESC
            LIMIT 1");
            $data = mysqli_fetch_assoc($query);
            $getId = $data['max_id'];
            $no = substr($getId, -6, 6);
            $no = (int) $no;
            $no += 1;
            $newId = sprintf("%03s", $no);
            ?>
            <div class="mb-3" hidden>
                <label for="rkmmedis" class="form-label textForm">NO REKAM MEDIS</label>
                <input name="rkmmedis" id="rkmmedis" class="form-control" type="number" disabled
                    value="<?php echo $newId ?>">
            </div>
            <div class="mb-3">
                <label for="nik" class="form-label textForm">NIK</label>
                <input name="nik" id="nik" class="form-control" type="number" placeholder="Masukan NIK"
                    aria-label="default input example">
                <div id="result" class="mt-3"></div>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label textForm">Nama</label>
                <input name="nama" id="nama" class="form-control" type="text" placeholder="Masukan Nama Lengkap"
                    aria-label="default input example">
            </div>
            <div class="mb-3">
                <label for="telp" class="form-label textForm">No. Hp </label>
                <input name="telp" id="telp" class="form-control" type="number" placeholder="Masukan No. Hp"
                    aria-label="default input example">
            </div>
            <div class="mb-3">
                <label for="jeniskelamin" class="form-label textForm">Jenis Kelamin</label>
                <select name="jeniskelamin" class="form-select" id="jeniskelamin">
                    <option hidden>Pilih Jenis Kelamin</option>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select>

            </div>
            <div class="mb-3">
                <label for="tgllahir" class="form-label textForm">Tgl Lahir</label>
                <input name="tgllahir" id="tgllahir" class="form-control" type="text" value=""
                    aria-label="default input example">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label textForm">Alamat (Nama Jalan)</label>
                <input name="alamat" class="form-control" id="alamat" rows="3"></input>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="provinsi" class="form-label textForm">Provinsi</label>
                    <?php $sql_provinsi = mysqli_query($koneksi, "SELECT * FROM tbl_provinsi ORDER BY NAMA_PROV ASC"); ?>
                    <select class="form-control" name="provinsi" id="provinsi">
                        <option></option>
                        <?php
                        while ($rs_provinsi = mysqli_fetch_assoc($sql_provinsi)) {
                            echo '<option value="' . $rs_provinsi['ID_PROV'] . '">' . $rs_provinsi['NAMA_PROV'] . '</option>';
                        }
                        ?>
                    </select>
                    <img src="assets/img/loading.gif" width="35" id="load1" style="display:none;" />
                </div>
                <div class=" col-md-6 mb-3">
                    <label for="kota" class="form-label textForm">Kabupaten</label>
                    <select class="form-control" name="kota" id="kota">
                        <option></option>
                    </select>
                    <img src="assets/img/loading.gif" width="35" id="load2" style="display:none;" />
                </div>
            </div>

            <div class="row">
                <div class=" col-md-6 mb-3">
                    <label for="kecamatan" class="form-label textForm">Kecamatan</label>
                    <select class="form-control" name="kecamatan" id="kecamatan">
                        <option></option>
                    </select>
                    <img src="assets/img/loading.gif" width="35" id="load3" style="display:none;" />
                </div>
                <div class=" col-md-6 mb-3">
                    <label for="kelurahan" class="form-label textForm">Kelurahan</label>
                    <select class="form-control" name="kelurahan" id="kelurahan">
                        <option></option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="d-grid mb-5 mt-2">
                    <input type="submit" class="submit btn btn-primary textForm" value="DAFTAR">
                </div>
            </div>
        </form>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js">
    </script>
    <script>
    function daftarpoli() {
        location.replace("poli-rkmmedis.php");
    }

    function kembali() {
        location.replace("index.php");
    }
    </script>

    <!-- Validasi -->
    <script>
    $("#daftar").validate({
        rules: {
            tgllahir: "required",
            nama: "required",
            telp: "required",
            jeniskelamin: "required",
            alamat: "required",
            provinsi: "required",
            nik: {
                required: true,
                minlength: 16,
                maxlength: 16
            },
        },
        messages: {
            tgllahir: "<span style='color:red'>Wajib diisi</span>",
            nama: "<span style='color:red'>Wajib diisi</span>",
            telp: "<span style='color:red'>Wajib diisi</span>",
            jeniskelamin: "<span style='color:red'>Wajib diisi</span>",
            alamat: "<span style='color:red'>Wajib diisi</span>",
            provinsi: "<span style='color:red'>Wajib diisi</span>",
            nik: {
                required: "<span style='color:red'>Wajib diisi</span>",
                minlength: "<span style='color:red'>Masukan 16 Digit Nomor KTP</span>",
                maxlength: "<span style='color:red'>Masukan 16 Digit Nomor KTP</span>"
            },
        },
        errorElement: "span",
    })



    // Select the input element
    const input = document.querySelector('#nik');
    // Add an event listener for the keyup event
    input.addEventListener('keyup', () => {
        // Get the length of the input value
        const length = input.value.length;
        // Check if the length is equal to 16
        if (length === 16) {
            $(document).ready(function() {
                $('input[type="submit"]').attr('disabled', 'disabled');
                $('#nik').keyup(function() {
                    var nik = $('#nik').val();
                    if (nik == 0) {
                        $('input[type="submit"]').attr('disabled', 'disabled');
                        $('#result').text('').removeClass();
                    } else {
                        $.ajax({
                            url: 'proses/cek-nik.php',
                            type: 'POST',
                            data: 'nik=' + nik,
                            success: function(hasil) {
                                if (hasil > 0) {
                                    $('#result').show('#result').text(
                                        'Nomor NIK Sudah Terdaftar, Silahkan Kembali Dan Pilih Menu Pasien Lama'
                                    ).addClass('alert alert-danger mt-2');
                                    $('.tombol').show('fast');
                                    $('input[type="submit"]').attr('disabled',
                                        'disabled');
                                } else {
                                    $('#result').removeClass('alert alert-success')
                                        .hide('#result')
                                    $('input[type="submit"]').removeAttr(
                                        'disabled');
                                }
                            }
                        });
                    }
                });
            });
        }
    });



    // Cek NIK
    // $(document).ready(function() {
    //     $('input[type="submit"]').attr('disabled', 'disabled');
    //     $('#nik').keyup(function() {
    //         var nik = $('#nik').val();
    //         if (nik == 0) {
    //             $('input[type="submit"]').attr('disabled', 'disabled');
    //             $('#result').text('').removeClass();
    //         } else {
    //             $.ajax({
    //                 url: 'proses/cek-nik.php',
    //                 type: 'POST',
    //                 data: 'nik=' + nik,
    //                 success: function(hasil) {
    //                     if (hasil > 0) {
    //                         $('#result').show('#result').text(
    //                             'Nomor NIK Sudah Terdaftar, Silahkan Kembali Dan Pilih Menu Pasien Lama'
    //                         ).addClass('alert alert-danger mt-2');
    //                         $('.tombol').show('fast');
    //                         $('input[type="submit"]').attr('disabled', 'disabled');
    //                     } else {
    //                         $('#result').removeClass('alert alert-success').hide('#result')
    //                         $('input[type="submit"]').removeAttr('disabled');
    //                     }
    //                 }
    //             });
    //         }
    //     });
    // });
    // End Cek NIK



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
    </script>
    <!-- end validasi -->
</body>


</html>