<?php
    if (isset($_POST['kirim'])) {
        $nama = $_POST['nama'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $hobi = isset($_POST['hobi']) ? implode(", ", $_POST['hobi']) : "Tidak ada";
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>103032300101</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <form>
        <h2>Data Diri Anda</h2>

        <label><b>Nama Lengkap: </b> <?php echo $nama; ?> </label>

        <label><b>Tanggal Lahir: </b> <?php echo $tgl_lahir; ?> </label>

        <label><b>Hobi: </b> <?php echo $hobi; ?> </label>

        <label><a href="index.html">Kembali</a></label>
      </form>
    </div>
  </body>
</html>