<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Anjungan RSUD Jombang</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/jquery/jquery_3.5.1.min.js"></script>
    <!-- jam -->
    <script src="assets/momentjs/moment.min.js"></script>
    <script src="assets/momentjs/moment-timezone-with-data.js"></script>
    <script src="assets/momentjs/moment-timezone-with-data-1970-2030.js"></script>
    <script src="assets/momentjs/moment.locale.js"></script>
    <script src="assets/momentjs/jam.js"></script>
    <!-- end jam -->
</head>

<body class="d-flex" id="page">
    <div class="container">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner" style="margin-top: 120px;">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="assets/img/gambar1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-interval="2000">
                    <img src="assets/img/gambar2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/gambar3.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="container my-auto text-center">
        <h3 class="mb-5"><img src="assets/img/Group%2012.png" style="margin-bottom: -45px;"></h3>
        <h2 class="mb-1" style="font-size: 33px;font-family: Poppins, sans-serif;padding-bottom: 10px;"><span
                style="color: rgb(184, 51, 51);">Selamat Datang Di RSUD Jombang</span>
        </h2>
        <h3 class="mb-2">
            <em style="padding-top: 0px;margin-top: 59px;color: var(--bs-red);">
                <span style="color: rgb(241, 239, 239);">Silahkan Pilih Menu Layanan</span>
            </em>
        </h3>
        <h3 class="mb-3">
            <em style="padding-top: 0px;margin-top: 59px;color: var(--bs-red);">
                <span id="clock" style="color: rgb(241, 239, 239);"></span>
            </em>
        </h3>
        <a class="d-inline-block" data-bs-toggle="modal" data-bs-target="#myModal" onclick="pilihpasien()">
            <img src="assets/img/daftar.png" width="171" height="149" style="margin: 6px;"></a>
        <a class="d-inline-block" href="cekpendaftaran/cekdaftar.php" style="margin: 6px;">
            <img src="assets/img/cek_daftar.png" width="171" height="149" style="margin: 6px;"></a>
        <a class="d-inline-block" href="informasi.php" style="margin: 6px;">
            <img src="assets/img/informasi.png" width="171" height="149" style="margin: 6px;"></a>
    </div>
    <!-- Modal Tombol Pilih -->
    <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyword="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Silakan Pilih Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <button type="button" class="btn btn-warning btn-lg" onclick="baru()">PASIEN BARU</button>
                    <button type="button" class="btn btn-primary btn-lg" onclick="lama()">PASIEN LAMA</button>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/stylish-portfolio.js"></script>
    <script>
    // Audio
    function pilihpasien() {
        $(document).ready(function() {
            var audioElement = document.createElement('audio');
            audioElement.setAttribute('src', 'assets/audio/pilih-pasien.mp3');
            audioElement.play();
        });

    }
    // edd Audio

    function baru() {
        location.replace("daftar.php"); // Pasien Baru
    }

    function lama() {
        location.replace("poli.php"); // Pasien Lama
    }
    </script>

</body>

</html>