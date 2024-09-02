<?php
include 'koneksi.php';

$nisn = $_POST['nisn'];
$siswa = $_POST['siswa'];
$kelas = $_POST['kelas'];

mysqli_query($koneksi,"insert into siswa values('$nisn','$siswa','$kelas')");

header("location:siswap.php");

?>