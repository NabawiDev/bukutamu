
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BUKU TAMU</title>

    <!-- Custom fonts for this template-->
    <link href="aset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="aset/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-warning">

    <div class="container">

    <div class="head text-center">
        <h2 class="text-white">BUKU TAMU <br>PPLG - SKANSAY</h2>
    </div>

    <div class="row mt-2">
        <div class="col-lg-7 mb-3">
            <div class="card shadow bg-gradient-light">
                <div class="card-body">

                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Data Pengunjung SKANSAY</h1>
                            </div>
                            <form class="user" method="post" action="proses_tambah.php">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="nama"
                                        placeholder="Nama Pengunjung">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="asal"
                                        placeholder="Asal Instansi">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="tujuan"
                                        placeholder="Tujuan">
                                </div> <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="hp"
                                        placeholder="Nomer HP">
                                </div>
                                <div class="form-grup row">
                                    <input type="submit" class="btn btn-primary btn-user btn-block" value="SIMPAN">
                                </div>
                            </form>
                               
                </div>
            </div>
        </div>
    </div>
    

    <div class="col-lg-5 mb-3">
    <div class="card shadow">
             <div class="card-body">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Statistik Pengunjung</h1>
                </div>

             <?php 
                  include 'koneksi.php';
                  $sekarang = date('y-m-d');
                  $jml_sekarang = mysqli_fetch_array(mysqli_query($koneksi, "SELECT count(*) FROM tb_tamu where tanggal like '%$sekarang%'"));

                  $kemarin = date('y-m-d', strtotime('-1 day', strtotime(date('y-m-d'))));
                  $jml_kemarin = mysqli_fetch_array(mysqli_query($koneksi, "SELECT count(*) FROM tb_tamu where tanggal like '%$kemarin%'"));

                  $bulan = date('m');
                  $jml_bulan = mysqli_fetch_array(mysqli_query($koneksi, "SELECT count(*) FROM tb_tamu where month(tanggal) = '$bulan'"));

                  $keseluruhan = mysqli_fetch_array(mysqli_query($koneksi, "SELECT count(*) FROM tb_tamu"));
                  ?>
 
                <table class="table table-bordered">
                    <tr>
                        <td>Hari ini</td>
                        <td>:<?= $jml_sekarang[0] ?></td>
                    </tr>
                    <tr>
                        <td>Kemarin</td>
                        <td>:<?= $jml_kemarin[0] ?></td>
                    </tr>
                    <tr>
                        <td>Bulan ini</td>
                        <td>:<?= $jml_bulan[0] ?></td>
                    </tr>
                    <tr>
                        <td>Keseluruhan</td>
                        <td>:<?= $keseluruhan[0] ?></td>
                    </tr>
                </table>
             </div>
             </div>
             

    </div>
    </div>
    


    <div class="card shadow">
        <div class="card-header">
            Data Pengunjung Hari Ini, <?= date('d-m-y') ?>
        </div>
        <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pengunjung SKANSAY</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pengunjung</th>
                                            <th>Asal Instansi</th>
                                            <th>Tujuan</th>
                                            <th>No. HP</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include "koneksi.php";
                                        $tgl = date('y-m-d');
                                        $tampil = mysqli_query($koneksi, "SELECT * FROM tb_tamu where tanggal like '%$tgl%' order by id desc");
                                        $no = 1;
                                        while($data = mysqli_fetch_array($tampil)){
                                        ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $data['nama'] ?></td>
                                            <td><?= $data['asal'] ?></td>
                                            <td><?= $data['tujuan'] ?></td>
                                            <td><?= $data['hp'] ?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

        </div>
    </div>

</div>

    <!-- Bootstrap core JavaScript-->
    <script src="aset/vendor/jquery/jquery.min.js"></script>
    <script src="aset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="aset/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="aset/js/sb-admin-2.min.js"></script>

</body>

</html>