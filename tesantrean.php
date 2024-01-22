<?php include 'config.php';

$today = date('dmy');
$char = 'GIGI' . $today;
$query = mysqli_query($koneksi, "SELECT max(ID_ANTREAN) as max_id FROM tbl_antrean WHERE ID_ANTREAN LIKE '{$char}%' ORDER BY ID_ANTREAN DESC LIMIT 1");

$data = mysqli_fetch_assoc($query);
$getId = $data['max_id'];

$no = substr($getId, -3, 3);


// Selanjutnya kita convert ke tipe data Integer agar bisa di Increment (ditambah)
$no = (int) $no;
// Ditambah 1
$no += 1;
/**
 * Atau bisa gunakan cara ini 
 * $no++;
 * $no = $no + 1;
 * bebas ya, silahkan pilih sesuai selera :v
 */

// Oke next kita bakal generate kode otomatisnya
// perintah sprintf("%04s", $no); digunakan untuk memformat string sebanyak 4 karakter
// misal sprintf("%04s", 2); maka akan dihasilkan '0002'
// atau misal sprintf("%04s", 1); maka akan dihasilkan string '0001'
$newId = $char . sprintf("%03s", $no);

// tampilkan kode otomatis

$sql2 = "INSERT INTO tbl_antrean (ID_ANTREAN, ANTREAN, TGL_ANTREAN) VALUES ('$newId', NULL, NULL)";
$masuk = mysqli_query($koneksi, $sql2);


echo $newId;