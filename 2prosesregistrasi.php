<?php
session_start();
include_once 'koneksi.php';
require_once 'db.php';
  if (isset($_POST["submit"])) {
  	$username  = $_POST["username"];
  	$password  = $_POST["password"];
  	$nama      = $_POST["nama"];
  	$nim       = $_POST["nim"];
  	$kelas     = $_POST["kelas"];
  	$jenis_kelamin = $_POST["jenis_kelamin"];
  	$hobi      = $_POST["hobi"];
  	$fakultas  = $_POST["fakultas"];
  	$alamat    = $_POST["alamat"];
	  $error     = 0;
  if ($nama > 35) {
    echo "Nama terlalu panjang";
  }
  if (is_numeric($nim) == false || strlen((string)$nim) > 10) {
    echo "harus angka dan maks 10 angka!";
  }else {
    $sql = "INSERT INTO db VALUES ('$username','$password','$nama',$nim,'$kelas','$jenis_kelamin','$hobi, '$fakultas','$alamat')";
      if (mysqli_query($conn, $sql)) {
        echo "Data berhasil ditambahkan";
          }else {
            echo "Terjadi Kesalahan : ". mysqli_error($conn);
          }
        }
      }else {
        echo "Silahkan Registrasi";
      }
echo "<a href='login.php'>Input Data</a>";
