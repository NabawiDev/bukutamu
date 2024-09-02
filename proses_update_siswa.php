<?php
include 'koneksi.php';

$nisn = $_POST['nisn'];
$siswa = $_POST['siswa'];
$kelas = $_POST['kelas'];

mysqli_query($koneksi,"UPDATE siswa SET id_siswa = '$nisn', nama_siswa='$siswa' , kelas='$kelas' where id_siswa='$nisn'");

header("location:siswap.php");

?>