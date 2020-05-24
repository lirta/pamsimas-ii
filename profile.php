<!--
*
*  INSPINIA - Responsive Admin Theme
*  version 2.7
*
-->
<?php include "config.php";
if (!isset($_SESSION)) {session_start();}
if (empty($_SESSION['username']) AND
    empty($_SESSION['password']))
    {include "login.php";}
    else {
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Pamsimas</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
     <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
           
            <?php
            if ($_SESSION['jabatan']=="SATKER") {
               include "sidebar.php";  
             } else {include "sidebar_fs.php";}  ?>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <?php include "navbar.php";  ?>
                </nav>
            </div>
            <div class="row  wrapper border-bottom white-bg page-heading">
                <div class="col-md-3">
                    <h1>Profile</h1>
                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5><?php echo "$_SESSION[nama]"; ?></h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                    <a class="close-link">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            
                                <div class="ibox-content">
                                   <label> 
                                       
                                    
                                        <?php
                            
                                          $queri = "SELECT * FROM pegawai where pegawai_id=$_SESSION[id]";
                                          $hasil = mysqli_query($koneksi,$queri);
                                          $kolom=mysqli_fetch_assoc($hasil);
                                        ?>
                                    <table class="table col-sm-5">
                                        <tr >
                                            <td rowspan="11"><?php echo "<img src='foto/$_SESSION[foto]' width='300px'>"; ?></td>
                                            <td colspan="2"><h1><span>INFORMASI PRIBADI</span></h1></td>
                                        </tr>
                                        <tr>
                                            <td>NAMA</td>
                                            <td> :</td>
                                            <td><?php echo "$kolom[pegawai_nama]";?></td>
                                        </tr>
                                        <tr >
                                            <td>USERNAME</td>
                                            <td> :</td>
                                            <td><?php echo "$kolom[username]";?></td>
                                        </tr>
                                        <tr >
                                            <td>TEMPAT LAHIR</td>
                                            <td> :</td>
                                            <td><?php echo "$kolom[pegawai_tmp_lahir]";?></td>
                                        </tr>
                                        <tr >
                                            <td>TANGGAL LAHIR</td>
                                            <td> :</td>
                                            <td><?php echo "$kolom[pegawai_tgl_lahir]";?></td>
                                        </tr>
                                        <tr >
                                            <td>JENIS KELAMIN</td>
                                            <td> :</td>
                                            <td><?php echo "$kolom[pegawai_jenis_kelamin]";?></td>
                                        </tr>
                                        <tr >
                                            <td>ALAMAT</td>
                                            <td> :</td>
                                            <td><?php echo "$kolom[pegawai_alamat]";?></td>
                                        </tr>
                                        <tr >
                                            <td>NO HP</td>
                                            <td> :</td>
                                            <td><?php echo "$kolom[pegawai_no_hp]";?></td>
                                        </tr >
                                        <tr >
                                            <td>JABATAN</td>
                                            <td> :</td>
                                            <td><?php echo "$kolom[pegawai_jabatan]";?></td>
                                        </tr>
                                        <tr >
                                            <td>PENEMPATAN</td>
                                            <td> :</td>
                                            <td><?php echo "$kolom[pegawai_penempatan]";?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <a href="change_profile.php" class="btn btn-primary btn-xs" type="submit">Changes Profile</a>
                                                <a href="change_password.php" class="btn btn-primary btn-xs" type="submit">Changes Password</a>
                                            </td>
                                        </tr>                                       
                                    </table>
                                      
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
            <?php include "footer.php"; ?>
            </div>
        </div>
        
    </div>
        
    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>


    
</body>
</html>
<?php }; ?>
