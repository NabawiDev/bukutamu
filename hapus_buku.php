<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"delete from buku where id_buku='$id'");

header("location:bukup.php");

?>