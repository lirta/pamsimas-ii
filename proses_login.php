<?php
  include "config.php";
  $username = $_POST['username'];
  $pass     =md5 ($_POST['password']);
  $sql = "SELECT * FROM pegawai WHERE username='$username' AND password='$pass'";
  $result = mysqli_query($koneksi, $sql);
  $ketemu=mysqli_num_rows($result);
  $r=mysqli_fetch_assoc($result);
  if ($ketemu > 0) {
    
    session_start();
    $_SESSION['username']            = $r['username'];
    $_SESSION['password']            = $r['password'];
    $_SESSION['jabatan']             = $r['pegawai_jabatan'];
    $_SESSION['nama']                = $r['pegawai_nama'];
    $_SESSION['foto']                = $r['pegawai_foto'];
    $_SESSION['id']                  = $r['pegawai_id'];

    header('location:home.php');
    mysqli_close($koneksi);
  }
  else {
    header('location:login.php');
  }
?>
