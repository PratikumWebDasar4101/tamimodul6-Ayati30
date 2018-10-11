<?php
session_start();
require_once("db.php");
$nim = $_SESSION["nim"];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<header>
		<a href="update.php">Posting Status</a> |
		<a href="logout.php">Logout</a>
	</header>
        <tr>
            <th>Nama</th>
            <th>Nim</th>
            <th>Kelas</th>
            <th>Jenis Kelamin</th>
            <th>Hobi</th>
            <th>Fakultas</th>
            <th>Alamat</th>
        </tr>
        <?php
            $sql = "SELECT * FROM db WHERE nim=$nim";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($result);
            if ($row > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    $id = $row["nim"];
                    ?>
                    <tr>
                        <td><?php echo $row["nama"]; ?></td>
                        <td><?php echo $row["nim"]; ?></td>
                        <td><?php echo $row["kelas"]; ?></td>
                        <td><?php echo $row["jenis_kelamin"]; ?></td>
                        <td><?php echo $row["hobi"]; ?></td>
                        <td><?php echo $row["fakultas"]; ?></td>
                        <td><?php echo $row["alamat"]; ?></td>
                    </tr>
                    <?php
                }
            }else {
                echo "o result";
            }
        ?>
	</table>
</body>
</html>
