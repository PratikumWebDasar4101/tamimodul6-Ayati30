<?php
require_once("db.php");
$nama           = $_POST['nama'];
$nim            = $_POST['nim'];
$kelas          = $_POST['kelas'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$hobi           = $_POST['hobi'];
$fakultas       = $_POST['fakultas'];
$alamat         = $_POST['alamat'];

$sql = "insert into daftar (nama, nim, kelas, jenis_kelamin, hobi,
        fakultas, alamat)
        value ('$nama', '$nim', '$kelas', '$jenis_kelamin', '$hobi',
        '$fakultas', '$alamat')";

if (mysqli_query($conn, $sql)) {
  echo "new recored created successfully";
} else {
  echo "error".$sql."<br>".mysqli_error($conn);
}

mysqli_close($conn);
?>
