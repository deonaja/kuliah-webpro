<?php
include 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM matakuliah");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Data Matakuliah</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h2>Daftar Matakuliah</h2>
  <a href="form_tambah.php">+ Tambah Data</a><br><br>

  <table border="1" cellpadding="8">
    <tr>
      <th>Kode MK</th>
      <th>Nama MK</th>
      <th>SKS</th>
      <th>Semester</th>
      <th>Aksi</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)): ?>
    <tr>
      <td><?= $row['Kode_MK'] ?></td>
      <td><?= $row['Nama_MK'] ?></td>
      <td><?= $row['SKS'] ?></td>
      <td><?= $row['Semester'] ?></td>
      <td>
        <a href="form_edit.php?Kode_MK=<?= $row['Kode_MK'] ?>">Edit</a> |
        <a href="hapus.php?Kode_MK=<?= $row['Kode_MK'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
      </td>
    </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>
