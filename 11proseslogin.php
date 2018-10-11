<?php
session_start();
if (isset($_POST['submit'])) {
	$username	= isset($_POST['username']) ? $_POST['username'] : "";
	$password	= isset($_POST['password']) ? md5($_POST['password']) : "";
	$data = $user -> user_exist($username, $password);
	if ($data['user_exist'] > 0) {
		$_SESSION['id'] = $data['id'];
		$_SESSION['username'] = $data['username'];
		$_SESSION['nama'] = $data['nama'];
		header('location: 3halamanA.php');
	} else {
		$_SESSION['pesan_login_registrasi'] = "Akun tidak terdaftar";
		header('location: 8login.php');
	}
}
?>
