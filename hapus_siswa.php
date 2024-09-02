<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"delete from siswa where id_siswa='$id'");

header("location:siswap.php");

?>