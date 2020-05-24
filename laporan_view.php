<?php include "config.php";
if (!isset($_SESSION)) {session_start();}
if (empty($_SESSION['username']) AND
    empty($_SESSION['password']))
    {include "login.php";}
    else {
      if ($_SESSION['jabatan'] == "SATKER") {
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pamsimas</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

</head>

<body>
 <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <?php
            include "sidebar.php";  ?>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <?php include "navbar.php";  ?>
        </nav>
        </div>

        <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Data</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="home.php">Home</a>
                        </li>
                        <li>
                            <a href="laporan_view_fs.php">Laporan</a>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">

                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>File Laporan</h5>
                        </div>
                        <div class="ibox-content">
                            
                            <div class="table-responsive">
                              <table class="table table-striped table-bordered table-hover dataTables-example" >
                                  <thead>
                                          <tr>
                                              <th width="10px" >No</th>
                                              <th>Laporan</th>
                                              <th>Tanggal</th>
                                              <th>Nama</th>
                                              <th>Jabatan</th>
                                              <th>Penempatan</th>
                                              <th >AKSI</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                         <?php
                                              $queri = "SELECT * FROM laporan INNER JOIN pegawai on laporan.pegawai_id=pegawai.pegawai_id";
                                              $hasil = mysqli_query($koneksi,$queri);
                                              $no=1;
                                              while($kolom=mysqli_fetch_assoc($hasil))
                                              {
                                                      echo "
                                                      <tr>
                                                          <td>$no</td>
                                                          <td>$kolom[laporan]</td>
                                                          <td>$kolom[tanggal]</td>
                                                          <td>$kolom[pegawai_nama]</td>
                                                          <td>$kolom[pegawai_jabatan]</td>
                                                          <td>$kolom[pegawai_penempatan]</td>
                                                          <td><a href='laporan/$kolom[laporan]'  class='btn btn-primary'><i class='fa fa-arrow-down'></i></a>
                                                          </td>
                                                      </tr>
                                                      ";
                                                      $no=$no+1;
                                              }
                                              mysqli_close($koneksi);
                                          ?>

                                      </tbody>
                              </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>


       
        </div>
        <div class="footer">
            <?php
                include 'footer.php';
            ?>
        </div>

        </div>
        </div>


    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
</body>

</html>
<?php
      }else{ include "home.php";} }; ?>
