<?php
include "config.php";

$ps=md5($_POST[password]);
if (!empty($_POST[password])) {
	

$queri="UPDATE  pegawai SET  password 			='$ps'
							 WHERE pegawai_id		='$_POST[id]' ";
mysqli_query($koneksi,$queri);
mysqli_close($koneksi);
header('location:profile.php');
}
else {
	echo "<script>alert('silahkan masukkan password baru anda')</script>";
	header('location:change_password.php');
}
?>