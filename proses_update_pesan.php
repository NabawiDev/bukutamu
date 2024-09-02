<?php
include 'koneksi.php';

$idp = $_POST['idp'];
$ids = $_POST['ids'];
$idb = $_POST['idb']; 
$pesan = $_POST['pesan'];
$kembali = $_POST['kembali']; 

mysqli_query($koneksi,"UPDATE pesan SET id_pesan = '$idp', id_siswa = '$ids', id_buku = '$idb', tanggal_pesan='$pesan' , tanggal_kembali='$kembali' where id_pesan='$idp'");

header("location:pesanp.php");

?>