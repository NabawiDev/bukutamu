<?php
include 'koneksi.php';

$idp = $_POST['idp'];
$ids = $_POST['ids'];
$idb = $_POST['idb']; 
$pesan = $_POST['pesan'];
$kembali = $_POST['kembali']; 

mysqli_query($koneksi,"insert into pesan values('$idp','$ids','$idb','$pesan','$kembali')");

header("location:pesanp.php");

?>