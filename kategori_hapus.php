<?php
include "config.php";

$queri="DELETE FROM kategori WHERE kategori_id='$_GET[id]'";
mysqli_query($koneksi,$queri);
mysqli_close($koneksi);
header('location:kategori_view.php');

?>