<?php
include 'koneksi.php';

$id = $_POST['id'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];

mysqli_query($koneksi,"insert into buku values('$id','$judul','$pengarang')");

header("location:bukup.php");

?>