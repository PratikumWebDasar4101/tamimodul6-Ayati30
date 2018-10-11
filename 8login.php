<?php
session_start(); //memulai session
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post" enctype="multipart/form-data" action="cod.php">
      Nama : <input type="text" name="nama">
      Nim : <input type="text" name="nim">
      <input type="submit" value="submit">
    </form>
  </body>
  Registrasi di <a href="formregist.php">Sini</a>!
</html>
