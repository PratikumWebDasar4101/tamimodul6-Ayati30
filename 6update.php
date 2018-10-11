<?php
require_once("db.php");
if(isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $kelas = $_POST["kelas"];
    $jk = $_POST["jenis_kelamin"];
    $hobi = $_POST["hobi"];
    $fakultas = $_POST["fakultas"];
    $alamat = $_POST["alamat"];
    $sql = "UPDATE db SET nama='$nama', nim='$nim', kelas='$kelas', jenis_kelamin='$jenis_kelamin', hobi='" . implode(",",$hobi) . "', fakultas='$fakultas', alamat='$alamat' WHERE nim=$nim";

    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        echo "Berhasil diupdate</p>";
    }else {
        echo "Error" . $sql . "<br>" . mysqli_error($conn);
    }
}else {
    echo "Tidak Berhasil diupdate";
}
