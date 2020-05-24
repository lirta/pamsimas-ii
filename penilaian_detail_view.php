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
                                    $queri = "SELECT * FROM penilaian inner join pegawai on penilaian.personil_id=pegawai.pegawai_id WHERE penilaian_id='$_GET[id]'";
                                    $hasil = mysqli_query($koneksi, $queri); 
                                    $data=mysqli_fetch_assoc($hasil);
                                    ?>
                        <h5>Detail Penilaian <?php echo "$data[pegawai_nama]"; ?></h5>
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
                        $queri = "SELECT * FROM detail_penilaian inner join kategori on detail_penilaian.kategori_id=kategori.kategori_id WHERE penilaian_id='$_GET[id]'";
                        $hasil = mysqli_query($koneksi, $queri); 
                        $no=1;
                        $total=0;
                          while($kolom=mysqli_fetch_assoc($hasil))
                          {
                            $total=$total+$kolom['nilai'];
                            echo "
                            <tr >
                                <td>$kolom[kategori]</td>
                                <td>$kolom[nilai]</td>
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
                    <table >
                        <h2>KOMENTAR</h2>
                        <?php
                            $querii = "SELECT * FROM keterangan inner join pegawai on keterangan.pegawai_id=pegawai.pegawai_id WHERE penilaian_id='$_GET[id]' order by keterangan_id desc";
                            $hasill = mysqli_query($koneksi, $querii); 
                            $no=1;
                            while($kom=mysqli_fetch_assoc($hasill))
                          {
                            if ($kom['pegawai_id'] == $_SESSION['id']) {
                                echo "
                            <tr>
                                <td width='60px'><h3>$kom[pegawai_nama] </h3></td>
                                <td width='30px'><h3>:</h3></td>
                                <td><h3>$kom[keterangan] </h3></td>
                                <td width='30px'><h3></h3></td>
                                <td ><a href='keterangan_hapus.php?id=$kom[keterangan_id]&&as=$kom[penilaian_id]' onclick=\"return confirm('Apakah anda yakin akan menghapus komentar : $kom[keterangan])\" class='btn btn-danger btn-circle'><i class='fa fa-times'></i></a></td>
                            </tr>";    
                            }else{
                                echo "
                            <tr>
                                <td><h3>$kom[pegawai_nama] </h3></td>
                                <td><h3>:</h3></td>
                                <td><h3>$kom[keterangan] </h3></td>
                                <td><h3></h3></td>
                            </tr>";
                            }
                            
                            $no=$no+1;
                          }
                        ?>
                        
                    </table>
                    <div class="hr-line-dashed"></div>
                    <form enctype="multipart/form-data" class="form-horizontal" method="post" action="keterangan_add_proses.php">
                        <div class="form-group" hidden="">
                            <label class="col-sm-2 control-label">ID</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"  name="id" id="id" value="<?php echo "$_SESSION[id]"; ?>">
                            </div>
                        </div>
                        <div class="form-group" hidden="">
                            <label class="col-sm-2 control-label">penilaian</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="pen" name="pen" value="<?php echo "$_GET[id]"; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Komentar</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="komen"  name="komen">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
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
<?php }else{ include "penilaian_detail_fs_view.php";} }; ?>
