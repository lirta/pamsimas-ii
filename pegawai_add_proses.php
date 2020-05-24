<?php
include "config.php";

$ps=md5($_POST[password]);
	$namafoto = $_FILES['gambar']['name'];
	$folderawal = $_FILES['gambar']['tmp_name'];
	$foldertujuan="foto/";
	move_uploaded_file($folderawal,$foldertujuan.$namafoto);

$ps=md5($_POST[tmp_lahir]);
$queri="INSERT INTO pegawai (pegawai_nama,
							 pegawai_tmp_lahir,
							 pegawai_tgl_lahir,
							 pegawai_jenis_kelamin,
							 pegawai_alamat,
							 pegawai_no_hp,
							 pegawai_jabatan,
							 pegawai_penempatan,
							 pegawai_foto,
							 username,
							 password)
VALUES ('$_POST[nama]',
		'$_POST[tmp_lahir]',
		'$_POST[tgl]',
		'$_POST[j_kl]',
		'$_POST[alamat]',
		'$_POST[no_hp]',
		'$_POST[jabatan]',
		'$_POST[Penempatan]',
		'$namafoto',
		'$_POST[tgl]',
		'$ps')";
mysqli_query($koneksi,$queri);
mysqli_close($koneksi);
header('location:pegawai_view.php');

?>
