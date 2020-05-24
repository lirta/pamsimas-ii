<?php
include "config.php";

    

$queri="UPDATE  kuesioner_kategori SET  kuesioner_kategori           ='$_POST[kategori]'
                             WHERE kuesioner_kategori_id       ='$_POST[id]' ";
mysqli_query($koneksi,$queri);
mysqli_close($koneksi);
header('location:kuesioner_kategori_view.php');

?>