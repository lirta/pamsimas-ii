<?php
include "config.php";

    

$queri="UPDATE  kategori SET  kategori           ='$_POST[kategori]'
                             WHERE kategori_id       ='$_POST[id]' ";
mysqli_query($koneksi,$queri);
mysqli_close($koneksi);
header('location:kategori_view.php');

?>