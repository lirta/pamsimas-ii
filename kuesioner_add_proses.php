<?php
include "config.php";

$id= date("y.m.d"."h.i.s");

$date= date("y.m.d");

$idket=$_POST['ket_id'];
$nila=$_POST['nilai'];
$jml_d=count($nila);
$jml_n=array_sum($nila);
$nilai_rata=$jml_n/$jml_d;

if ($nilai_rata=='4') {
	$nilai_rata_rata="SANGAT BAIK";
}elseif ($nilai_rata >='3') {
	$nilai_rata_rata="BAIK";
}elseif ($nilai_rata >='2') {
	$nilai_rata_rata="CUKUP";
}else{
	$nilai_rata_rata="BURUK";
}

$querii="INSERT INTO kuesioner (kuesioner_id,
								kuesioner_nama,
								kuesioner_tgl,
								pegawai_id,
								nilai_jml,
								nilai_huruf) 
								values 
								('$id',
								'$_POST[nama_ms]',
								'$date',
								'$_POST[personal]',
								'$nilai_rata',
								'$nilai_rata_rata')";
	mysqli_query($koneksi,$querii);

for ($i=0; $i < $jml_d ; $i++) { 
	$queri="INSERT INTO kuesioner_detail (kuesioner_id,kuesioner_kategori_id,kuesioner_nilai) values ('$id','$idket[$i]','$nila[$i]')";
	mysqli_query($koneksi,$queri);
}

mysqli_close($koneksi);
header('location:index.php')


?>
