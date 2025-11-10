<!DOCTYPE html>
<html>
<head>
  <title>Tambah Data Matakuliah</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h2>Tambah Matakuliah</h2>
  <form action="tambah.php" method="POST">
    <label>Kode MK:</label><br>
    <input type="text" name="Kode_MK" required><br><br>
    <label>Nama MK:</label><br>
    <input type="text" name="Nama_MK" required><br><br>
    <label>SKS:</label><br>
    <input type="number" name="SKS" required><br><br>
    <label>Semester:</label><br>
    <input type="number" name="Semester" required><br><br>
    <input type="submit" value="Simpan">
    <a href="index.php">Batal</a>
  </form>
</body>
</html>
