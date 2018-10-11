<?php
require_once("db.php");
if(isset($_GET["nim"])) {
    $nim = $_GET["nim"];
    $query = "SELECT * FROM db WHERE nim=$nim";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);
    $new_hobi = explode(",",$row["hobi"]);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Pendaftaran Mahasiswa</title>
</head>
<body>
	<form action ="2prosesregistrasi.php" method ="post" >  <br/>
	<table border=0 align="center" cellpadding=5 cellspacing=0>
		<tr>
<td colspan=3><center><font size=5>PENDAFTARAN</font></center></td>
</tr>
		<tr>
		<td>Nama</td><td>:</td><td><input type="text" name="nama"></td>
		</tr>
		<tr>
		<td>Nim</td><td>:</td><td><input type="text" name="nim"></td>
		</tr>
		<tr>
      <td>Kelas</td><td>:</td><td>
        <input type="radio" name="kelas" value="D3MI-40-01">D3MI-40-01
        <input type="radio" name="kelas" value="D3MI-40-02">D3MI-40-02
        <input type="radio" name="kelas" value="D3MI-40-03">D3MI-40-03</td><br/>
		</tr>
    <tr>
      <td>Jenis Kelamin</td><td>:</td><td><input type="radio" name="jenis_kelamin" value="pria">pria
 						  <input type="radio" name="jenis_kelamin" value="wanita">wanita</td><br/>
		</tr>
    <tr>
      <td>Hobi</td><td>:</td><td>
        <input type="checkbox" name="hobi[]" value="Membaca"> Membaca<br>
        	<input type="checkbox" name="hobi[]" value="Traveling"> Traveling<br>
        	<input type="checkbox" name="hobi[]" value="Tidur"> Tidur<br>
        	<input type="checkbox" name="hobi[]" value="Makan"> Makan<br>
        	<input type="checkbox" name="hobi[]" value="Belajar"> Belajar<br><br>
      </td>
      <tr>
        <td>Fakultas</td><td>:</td><td>
        <select name="fakultas">
          <option value="">--- Fakultas ---</option>
          <option value="FIT">FIT</option>
          <option value="FIK">FIK</option>
          <option value="FEB">FEB</option>
          <option value="FKB">FKB</option>
          <option value="FIF">FIF</option>
          <option value="FTE">FTE</option>
        </select>
  		</tr>
      <tr>
  		<td>Alamat</td><td>:</td><td>
         <textarea name="alamat" rows="10" cols="30"></textarea></td>
  		</tr>
			<tr>
			<td></td><td></td><td><input type="submit" name="kirim" value="kirim"></td>
			</tr>
</form>
</body>
</html>
