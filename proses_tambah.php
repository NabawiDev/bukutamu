<?php
include 'koneksi.php';

$tanggal = date('y-m-d');
$nama = $_POST['nama'];
$asal = $_POST['asal']; 
$tujuan = $_POST['tujuan'];
$hp = $_POST['hp'];

mysqli_query($koneksi,"INSERT INTO tb_tamu VALUES('', '$tanggal','$nama','$asal','$tujuan','$hp')");

header("location:admin.php");

?>