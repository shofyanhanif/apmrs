<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Pilih Poli Tujuan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/jquery/jquery_3.5.1.min.js"></script>
    <script src="../assets/jquery/jquery.validate_1.19.2.min.js"></script>
    <!-- <script src="../assets/bootstrap/js/bootstrap.min.js"></script> -->
    <script src="../assets/select2-4.0.6-rc.1/dist/js/select2.min.js"></script>
    <script src="../assets/select2-4.0.6-rc.1/dist/js/i18n/id.js"></script>
    <script src="../assets/js/app.js"></script>
    <script src="../assets/js/jam.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"
        integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/"> -->
    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../assets/css/cover.css" rel="stylesheet">

</head>
<!-- Card Tittle -->

<body>
    <!-- Card Tittle -->
    <div class="contianer py-3 px-3">
        <div class="card">
            <div class="card-body p-2">
                <h3 class="card-tittle text-center">PILIH POLI</h3>
                <div class="card-footer">
                    <a href="index.php" class="text-decoration-none text-dark">BERANDA</a> >
                    <a href="poli.php" class="text-decoration-none text-dark">PILIH POLI</a> >
                    <h5 id="clock" class="text-decoration-none text-dark text-end"></h5>
                </div>
            </div>
        </div>
        <div class="text-center mt-3">
            <div type="button" class="btn btn-danger btn-lg" onclick="kembali()">KEMBALI</div>
        </div>
    </div>

    <!-- End Card -->

    <!-- Section-->
    <section>
        <div class="container-fluid px-3">
            <div class="row row-cols-lg-5 text-center">
                <div class="col mb-2">
                    <div class="card">
                        <div class="card-body">

                            <a href="daftar-rkmmedis.php?poli=<?php $poli = '101';
                                                                echo $poli;
                                                                ?>">
                                <img src="../img/poli THT.png" width="80px" height="80px">
                            </a>
                        </div>

                        <div class="card-footer">
                            <strong>
                                POLI THT
                            </strong>
                        </div>
                    </div>
                </div>

                <div class="col mb-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="daftar-rkmmedis.php?poli=<?php echo '102' ?>">
                                <img src="../img/poli bedah.png" width="80px" height="80px">
                            </a>
                        </div>
                        <div class="card-footer"><strong>POLI BEDAH</strong></div>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="daftar-rkmmedis.php?poli=<?php $poli = '103';
                                                                echo $poli; ?>">
                                <img src="../img/poli orthopedi.png" width="80px" height="80px">
                            </a>
                        </div>
                        <div class="card-footer"><strong>POLI ORTHOPEDI</strong></div>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="daftar-rkmmedis.php?poli=<?php echo '104' ?>">
                                <img src="../img/rehab medis.png" width="80px" height="80px">
                            </a>
                        </div>
                        <div class="card-footer"><strong>POLI REHAB MEDIS</strong></div>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="daftar-rkmmedis.php?poli=<?php echo '106' ?>">
                                <img src="../img/poli interna.png" width="80px" height="80px">
                            </a>
                        </div>
                        <div class="card-footer"><strong>POLI INTERNE</strong></div>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="daftar-rkmmedis.php?poli=<?php echo '107' ?>">
                                <img src="../img/poli mata.png" width="80px" height="80px">
                            </a>
                        </div>
                        <div class="card-footer"><strong>POLI MATA</strong></div>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="daftar-rkmmedis.php?poli=<?php echo '108' ?>">
                                <img src="../img/poli obgyn.png" width="80px" height="80px">
                            </a>
                        </div>
                        <div class="card-footer"><strong>POLI OBGYN</strong></div>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="daftar-rkmmedis.php?poli=<?php echo '109' ?>">
                                <img src="../img/poli anak.png" width="80px" height="80px">
                            </a>
                        </div>
                        <div class="card-footer"><strong>POLI ANAK</strong></div>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="daftar-rkmmedis.php?poli=<?php echo '110' ?>">
                                <img src="../img/poli kulit dan kelamin.png" width="80px" height="80px">
                            </a>
                        </div>
                        <div class="card-footer"><strong>POLI KULIT & KELAMIN</strong></div>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="daftar-rkmmedis.php?poli=<?php echo '111' ?>">
                                <img src="../img/poli syaraf.png" width="80px" height="80px">
                            </a>
                        </div>
                        <div class="card-footer"><strong>POLI SYARAF</strong></div>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="daftar-rkmmedis.php?poli=<?php echo '112' ?>">
                                <img src="../img/poli paru.png" width="80px" height="80px">
                            </a>
                        </div>
                        <div class="card-footer"><strong>POLI PARU</strong></div>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="daftar-rkmmedis.php?poli=<?php echo '113' ?>">
                                <img src="../img/poli jantung.png" width="80px" height="80px">
                            </a>
                        </div>
                        <div class="card-footer"><strong>POLI JANTUNG</strong></div>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="daftar-rkmmedis.php?poli=<?php echo '114' ?>">
                                <img src="../img/poli kesehatan.png" width="80px" height="80px">
                            </a>
                        </div>
                        <div class="card-footer"><strong>POLI KESEHATAN</strong></div>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="daftar-rkmmedis.php?poli=<?php echo '115' ?>">
                                <img src="../img/poli bedah syaraf.png" width="80px" height="80px">
                            </a>
                        </div>
                        <div class="card-footer"><strong>POLI BEDAH SYARAF</strong></div>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="daftar-rkmmedis.php?poli=<?php echo '116' ?>">
                                <img src="../img/poli gizi.png" width="80px" height="80px">
                            </a>
                        </div>
                        <div class="card-footer"><strong>POLI GIZI</strong></div>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="daftar-rkmmedis.php?poli=<?php echo '117' ?>">
                                <img src="../img/IRD.png" width="80px" height="80px">
                            </a>
                        </div>
                        <div class="card-footer"><strong>POLI INSTALASI RAWAT DARURAT</strong></div>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="daftar-rkmmedis.php?poli=<?php echo '118' ?>">
                                <img src="../img/poli jiwa.png" width="80px" height="80px">
                            </a>
                        </div>
                        <div class="card-footer"><strong>POLI JIWA</strong></div>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="daftar-rkmmedis.php?poli=<?php echo '119' ?>">
                                <img src="../img/poli hemodialisa.png" width="80px" height="80px">
                            </a>
                        </div>
                        <div class="card-footer"><strong>POLI HEMODIALISA</strong></div>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="daftar-rkmmedis.php?poli=<?php echo '120' ?>">
                                <img src="../img/poli vct.png" width="80px" height="80px">
                            </a>
                        </div>
                        <div class="card-footer"><strong>POLI VCT</strong></div>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="card">
                        <div class="card-body">
                            <img src="../img/poli urologi.png" width="80px" height="80px">
                        </div>
                        <div class="card-footer"><strong>POLI UROLOGI</strong></div>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="card">
                        <div class="card-body">
                            <img src="../img/poli nyeri.png" width="80px" height="80px">
                        </div>
                        <div class="card-footer"><strong>POLI NYERI</strong></div>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="daftar-rkmmedis.php?poli=<?php echo '131' ?>">
                                <img src="../img/poli psikologi.png" width="80px" height="80px">
                            </a>
                        </div>
                        <div class="card-footer"><strong>POLI PSIKOLOGI</strong></div>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="daftar-rkmmedis.php?poli=<?php echo '134' ?>">
                                <img src="../img/poli orthodonti.png" width="80px" height="80px">
                            </a>
                        </div>
                        <div class="card-footer"><strong>POLI ORTHODONTI</strong></div>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="daftar-rkmmedis.php?poli=<?php echo '105' ?>">
                                <img src="../img/poli gigi periodonti.png" width="80px" height="80px">
                            </a>
                        </div>
                        <div class="card-footer"><strong>POLI GIGI PERIODONTI</strong></div>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="daftar-rkmmedis.php?poli=<?php echo '135' ?>">
                                <img src="../img/poli gigi endodonsi.png" width="80px" height="80px">
                            </a>
                        </div>
                        <div class="card-footer"><strong>POLI ENDODONSI</strong></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <!-- Footer-->
    <div class="footer">
        <footer class="py-2 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; RSUD Jombang</p>
            </div>
        </footer>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script>
    const myModal = document.querySelector('#myModal');

    function daftar() {
        location.replace("daftar-rkmmedis.php");
    }

    function kembali() {
        location.replace("index.php");
    }
    document.getElementById('clock').innerHTML = moment().format('LLL');
    </script>



</body>

</html>