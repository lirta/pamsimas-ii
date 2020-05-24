<?php
include "config.php";

$queri="DELETE FROM kuesioner_kategori WHERE kuesioner_kategori_id='$_GET[id]'";
mysqli_query($koneksi,$queri);
mysqli_close($koneksi);
header('location:kuesioner_kategori_view.php');

?>