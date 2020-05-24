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
    else { if ($_SESSION['jabatan'] == "SATKER") {
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

    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
           
            <?php
             
               include "sidebar.php";   ?>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <?php include "navbar.php";  ?>
                </nav>
            </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Data Penilaian</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="home.php">Home</a>
                        </li>
                        <li>
                            <a>Tables</a>
                        </li>
                        <li class="active">
                            <strong>Data Tables</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            
            <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                         <?php
                                    $queri = "SELECT * FROM kuesioner inner join pegawai on kuesioner.pegawai_id=pegawai.pegawai_id WHERE kuesioner_id='$_GET[id]'";
                                    $hasil = mysqli_query($koneksi, $queri); 
                                    $data=mysqli_fetch_assoc($hasil);
                                    ?>
                        <h5>Detail Kuesioner <?php echo "$data[pegawai_nama]"; ?></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                            <table>
                                <tr>
                                    <td><h3>Pegawai</h3></td>
                                    <td><h3>:</h3></td>
                                    <td><h3><?php echo "$data[pegawai_nama]"; ?></h3></td>
                                </tr>
                                <tr>
                                    <td><h3>Jabatan</h3></td>
                                    <td><h3>:</h3></td>
                                    <td><h3><?php echo "$data[pegawai_jabatan]"; ?></h3></td>
                                </tr>
                                <tr>
                                    <td><h3>Penempatan</h3></td>
                                    <td><h3>:</h3></td>
                                    <td><h3><?php echo "$data[pegawai_penempatan]"; ?></h3></td>
                                </tr>
                                <tr>
                                    <td><h3>Pengisi</h3></td>
                                    <td><h3>:</h3></td>
                                    <td><h3><?php echo "$data[kuesioner_nama]"; ?></h3></td>
                                </tr>
                            </table>
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>penilaian</th>
                        <th>Nilai</th>
                    </tr>
                    </thead>
                    <tbody>
                     <?php
                        $queri = "SELECT * FROM kuesioner_detail inner join kuesioner_kategori on kuesioner_detail.kuesioner_kategori_id=kuesioner_kategori.kuesioner_kategori_id WHERE kuesioner_id='$_GET[id]'";
                        $hasil = mysqli_query($koneksi, $queri); 
                        $no=1;
                        $total=0;
                          while($kolom=mysqli_fetch_assoc($hasil))
                          {
                            $total=$total+$kolom['kuesioner_nilai'];
                            echo "
                            <tr >
                                <td>$kolom[kuesioner_kategori]</td>
                                <td>$kolom[kuesioner_nilai]</td>
                            </tr>
                             ";
                                  $no=$no+1;
                            
                        }
                    ?>
                    
                    
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Total</th>
                        <th><?php echo "$total"; ?></th>
                    </tr>
                    <tr>
                        <th>Rata-rata</th>
                        <th><?php $no=$no-1; $r=$total/$no; echo "$r"; ?></th>
                    </tr>
                    <tr>
                        <th>Nilai Huruf</th>
                        <th><?php 
                        if ($r == "4") {
                             echo " BAIK";
                         }elseif ($r >= "3") {
                             echo "BAIK";
                         }elseif ($r >= "2") {
                             echo "CUKUP";
                         }else{echo "BURUK";} ?></th>
                    </tr>
                    </tfoot>
                    </table>
                        </div>

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

    <script src="js/plugins/dataTables/datatables.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

    </script>


    
</body>
</html>
<?php }else{ include "home.php";} }; ?>
