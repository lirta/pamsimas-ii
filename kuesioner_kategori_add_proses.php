<?php
include "config.php";

$queri="INSERT INTO kuesioner_kategori (kuesioner_kategori)
VALUES ('$_POST[kategori]')";
mysqli_query($koneksi,$queri);
mysqli_close($koneksi);
header('location:kuesioner_kategori_view.php');

?>
