<?php
include "config.php";


	$foto = $_FILES['gambar']['name'];
	$folderawal = $_FILES['gambar']['tmp_name'];
	$foldertujuan="foto/";
	move_uploaded_file($folderawal,$foldertujuan.$foto);
	if (!empty($folderawal)) {
							 $queri="UPDATE  pegawai SET  
							 pegawai_nama 			='$_POST[nama]',
							 pegawai_tmp_lahir		='$_POST[tmp_lahir]',
							 pegawai_tgl_lahir		='$_POST[tgl]',
							 pegawai_jenis_kelamin	='$_POST[j_kl]',
							 pegawai_alamat			='$_POST[alamat]',
							 pegawai_no_hp			='$_POST[no_hp]',
							 pegawai_jabatan		='$_POST[jabatan]',
							 pegawai_penempatan		='$_POST[Penempatan]',
							 pegawai_foto			='$foto'
							 WHERE pegawai_id		='$_POST[id]' ";
							}else{
							 $queri="UPDATE  pegawai SET  
							 pegawai_nama 			='$_POST[nama]',
							 pegawai_tmp_lahir		='$_POST[tmp_lahir]',
							 pegawai_tgl_lahir		='$_POST[tgl]',
							 pegawai_jenis_kelamin	='$_POST[j_kl]',
							 pegawai_alamat			='$_POST[alamat]',
							 pegawai_no_hp			='$_POST[no_hp]',
							 pegawai_jabatan		='$_POST[jabatan]',
							 pegawai_penempatan		='$_POST[Penempatan]'
							 WHERE pegawai_id		='$_POST[id]' ";
							}
mysqli_query($koneksi,$queri);
mysqli_close($koneksi);
header('location:pegawai_view.php');

?>
