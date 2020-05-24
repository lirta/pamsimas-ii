<?php
include "config.php";

$date= date("d.m.Y");
$acak = rand(00000000, 99999999);
$namafile = $_FILES['laporan']['name'];
  $folderawal = $_FILES['laporan']['tmp_name'];
  $foldertujuan="laporan/";
  $nama=$acak.$namafile;
  move_uploaded_file($folderawal,$foldertujuan.$nama);
  $queri="INSERT INTO laporan (pegawai_id,tanggal,laporan) VALUES('$_POST[id]','$date','$nama')";
  mysqli_query($koneksi,$queri);
  mysqli_close($koneksi);
  header('location:laporan_view_fs.php');
 
?> 