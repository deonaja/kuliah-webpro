<?php
include 'koneksi.php';
$kode = $_GET['Kode_MK'];
$result = mysqli_query($conn, "SELECT * FROM matakuliah WHERE Kode_MK='$kode'");
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Data</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h2>Edit Matakuliah</h2>
  <form action="edit.php" method="POST">
    <input type="hidden" name="Kode_MK" value="<?= $data['Kode_MK'] ?>">
    <label>Nama MK:</label><br>
    <input type="text" name="Nama_MK" value="<?= $data['Nama_MK'] ?>"><br><br>
    <label>SKS:</label><br>
    <input type="number" name="SKS" value="<?= $data['SKS'] ?>"><br><br>
    <label>Semester:</label><br>
    <input type="number" name="Semester" value="<?= $data['Semester'] ?>"><br><br>
    <input type="submit" value="Update">
    <a href="index.php">Batal</a>
  </form>
</body>
</html>
