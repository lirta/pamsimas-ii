<?php
include "config.php";
$id=$_GET['as'];
$queri="DELETE FROM keterangan WHERE keterangan_id='$_GET[id]'";
mysqli_query($koneksi,$queri);
mysqli_close($koneksi);
header("location:penilaian_detail_view.php?id=$id");

?>