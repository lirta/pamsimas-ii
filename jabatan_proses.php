<?php
include "config.php";

$queri="INSERT INTO jabatan  (jabatan)
VALUES ('$_POST[jabatan]')";
mysqli_query($koneksi,$queri);
mysqli_close($koneksi);
header('location:pegawai_view.php');

?>
?>
