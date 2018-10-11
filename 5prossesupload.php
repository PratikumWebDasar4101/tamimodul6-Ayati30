<?php
session_start();
include("upload.php");
$nama_file = $_FILES["file"]["name"];
$nama_file_tmp = $_FILES["file"]["tmp_name"];
$target_file = $dir.$nama_file;
if (move_uploaded_file($nama_file_tmp, $target_file)) {
 	echo "Berhasil <br>";
 }
$user = array(
		"status" => $_POST["status"],
		"file" => $target_file
);
$_SESSION["user"] = $user;


?>
