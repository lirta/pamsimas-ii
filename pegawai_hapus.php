<?php
include "config.php";

$queri="DELETE FROM pegawai WHERE pegawai_id='$_GET[id]'";
mysqli_query($koneksi,$queri);
mysqli_close($koneksi);
header('location:pegawai_view.php');

?>