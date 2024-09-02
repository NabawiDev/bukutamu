<?php
include 'koneksi.php';

$id = $_POST['id'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];

mysqli_query($koneksi,"UPDATE buku SET id_buku = '$id', judul_buku='$judul' , pengarang='$pengarang' where id_buku='$id'");

header("location:bukup.php");

?>