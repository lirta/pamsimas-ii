<?php
include "config.php";

$queri="INSERT INTO kategori (kategori)
VALUES ('$_POST[kategori]')";
mysqli_query($koneksi,$queri);
mysqli_close($koneksi);
header('location:kategori_view.php');

?>
