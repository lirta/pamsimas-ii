<?php
include "config.php";

$id_penilai=$_POST['id_pp'];
$periode=$_POST['periode'];
$personal=$_POST['personal'];
$penilaian_id=$periode.$personal;
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

$querii="INSERT INTO penilaian (penilaian_id,
								penilai_id,
								personil_id,
								periode,
								nilai_evaluasi,
								nilai_huruf) 
								values 
								('$penilaian_id',
								'$id_penilai',
								'$personal',
								'$_POST[periode]',
								'$nilai_rata',
								'$nilai_rata_rata')";
	mysqli_query($koneksi,$querii);

for ($i=0; $i < $jml_d ; $i++) { 
	$queri="INSERT INTO detail_penilaian (penilaian_id,kategori_id,nilai) values ('$penilaian_id','$idket[$i]','$nila[$i]')";
	mysqli_query($koneksi,$queri);
}

mysqli_close($koneksi);
header('location:penilaian_view.php')

?>
