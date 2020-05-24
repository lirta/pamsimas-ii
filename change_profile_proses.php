<?php
include "config.php";

 $queri = "SELECT * FROM  pegawai  WHERE pegawai_id='$_POST[id]'";
    $hasil = mysqli_query($koneksi, $queri); 
    $data=mysqli_fetch_assoc($hasil);
    if (!empty($hasil)) 
    {
    	if ($data[pegawai_id]==$_POST[id]) 
    	{
    		$namafoto = $_FILES['gambar']['name'];
			$folderawal = $_FILES['gambar']['tmp_name'];
			$foldertujuan="foto/";
			move_uploaded_file($folderawal,$foldertujuan.$namafot);
			if (!empty($folderawal)) {
			$queri="UPDATE  pegawai SET  pegawai_nama 			='$_POST[nama]',
										 pegawai_tmp_lahir		='$_POST[tmp_lahir]',
										 pegawai_tgl_lahir		='$_POST[tgl]',
										 pegawai_jenis_kelamin	='$_POST[j_kl]',
										 pegawai_alamat			='$_POST[alamat]',
										 pegawai_no_hp			='$_POST[no_hp]',
										 username 				='$_POST[username]',
										 pegawai_foto			='$namafoto'
										 WHERE pegawai_id		='$_POST[id]' ";
					}else{
			$queri="UPDATE  pegawai SET  pegawai_nama 			='$_POST[nama]',
										 pegawai_tmp_lahir		='$_POST[tmp_lahir]',
										 pegawai_tgl_lahir		='$_POST[tgl]',
										 pegawai_jenis_kelamin	='$_POST[j_kl]',
										 pegawai_alamat			='$_POST[alamat]',
										 pegawai_no_hp			='$_POST[no_hp]',
										 username 				='$_POST[username]'
										 WHERE pegawai_id		='$_POST[id]' ";
					}
			mysqli_query($koneksi,$queri);
			mysqli_close($koneksi);
			header('location:profile.php');

    	}else{
			header('location:change_profile.php');    		
    	}
    } else{
    	$namafoto = $_FILES['gambar']['name'];
			$folderawal = $_FILES['gambar']['tmp_name'];
			$foldertujuan="foto/";
			move_uploaded_file($folderawal,$foldertujuan.$namafot);
			if (!empty($folderawal)) {
			$queri="UPDATE  pegawai SET  pegawai_nama 			='$_POST[nama]',
										 pegawai_tmp_lahir		='$_POST[tmp_lahir]',
										 pegawai_tgl_lahir		='$_POST[tgl]',
										 pegawai_jenis_kelamin	='$_POST[j_kl]',
										 pegawai_alamat			='$_POST[alamat]',
										 pegawai_no_hp			='$_POST[no_hp]',
										 username 				='$_POST[username]',
										 pegawai_foto			='$namafoto'
										 WHERE pegawai_id		='$_POST[id]' ";
					}else{
			$queri="UPDATE  pegawai SET  pegawai_nama 			='$_POST[nama]',
										 pegawai_tmp_lahir		='$_POST[tmp_lahir]',
										 pegawai_tgl_lahir		='$_POST[tgl]',
										 pegawai_jenis_kelamin	='$_POST[j_kl]',
										 pegawai_alamat			='$_POST[alamat]',
										 pegawai_no_hp			='$_POST[no_hp]',
										 username 				='$_POST[username]'
										 WHERE pegawai_id		='$_POST[id]' ";
					}
			mysqli_query($koneksi,$queri);
			mysqli_close($koneksi);
			header('location:profile.php');
    }

?>
