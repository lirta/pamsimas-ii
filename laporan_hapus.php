<?php
include "config.php";

$queri="DELETE FROM laporan WHERE laporan_id='$_GET[id]'";
mysqli_query($koneksi,$queri);
mysqli_close($koneksi);
header('location:laporan_view_fs.php');

?>