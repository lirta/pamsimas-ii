<?php
include "config.php";

$queri="DELETE FROM penilaian WHERE penilaian_id='$_GET[id]';";
$queri .="DELETE FROM detail_penilaian WHERE penilaian_id='$_GET[id]'";
mysqli_multi_query($koneksi,$queri);
mysqli_close($koneksi);
header('location:penilaian_view.php');

?>