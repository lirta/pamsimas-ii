<?php
include "config.php";
$id=$_POST['pen'];
$queri="INSERT INTO keterangan (penilaian_id,pegawai_id,keterangan)
VALUES ('$_POST[pen]',
        '$_POST[id]',
        '$_POST[komen]')";
mysqli_query($koneksi,$queri);
mysqli_close($koneksi);
header("location:penilaian_detail_view.php?id=$id");
?>