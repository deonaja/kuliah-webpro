<?php
// Data barang
$barang = [
  "A001" => ["nama" => "Mouse", "harga" => 5000000],
  "A002" => ["nama" => "Headphone", "harga" => 750000],
  "A003" => ["nama" => "CPU", "harga" => 2300000]
];

// Inisialisasi variabel
$nama = $harga = $totalHarga = $diskon = $totalBayar = "";

// Jika tombol Cari diklik
if (isset($_POST['cari'])) {
  $kode = strtoupper(trim($_POST['kode']));
  if (array_key_exists($kode, $barang)) {
    $nama = $barang[$kode]['nama'];
    $harga = $barang[$kode]['harga'];
  } else {
    echo "<script>alert('Kode barang tidak ditemukan!'); window.history.back();</script>";
    exit;
  }
}

// Jika tombol Proses diklik
if (isset($_POST['proses'])) {
  $kode = strtoupper(trim($_POST['kode']));
  $jumlah = (int)$_POST['jumlah'];
  $metode = $_POST['metode'];

  if (array_key_exists($kode, $barang)) {
    $nama = $barang[$kode]['nama'];
    $harga = $barang[$kode]['harga'];
    $totalHarga = $harga * $jumlah;

    // Hitung diskon
    if ($metode == "Cash" || $jumlah > 5) {
      $diskon = 0.12 * $harga; // 12% dari harga barang
    } elseif ($metode == "Kredit" && $jumlah > 20) {
      $diskon = 0.05 * $totalHarga;
    } else {
      $diskon = 0;
    }

    $totalBayar = $totalHarga - $diskon;
  } else {
    echo "<script>alert('Kode barang tidak ditemukan!'); window.history.back();</script>";
    exit;
  }
}

// Jika tombol Cetak diklik
if (isset($_POST['cetak'])) {
  $nama = $_POST['nama'];
  $harga = $_POST['harga'];
  $jumlah = $_POST['jumlah'];
  $metode = $_POST['metode'];
  $total = $_POST['total'];
  $diskon = $_POST['diskon'];
  $totalbayar = $_POST['totalbayar'];

  echo "<h2>Struk Pembelian</h2>";
  echo "Nama Barang: $nama <br>";
  echo "Harga Barang: Rp " . number_format($harga,0,',','.') . "<br>";
  echo "Jumlah Barang: $jumlah <br>";
  echo "Metode Bayar: $metode <br>";
  echo "Total Harga: Rp " . number_format($total,0,',','.') . "<br>";
  echo "Diskon: Rp " . number_format($diskon,0,',','.') . "<br>";
  echo "<b>Total Bayar: Rp " . number_format($totalbayar,0,',','.') . "</b><br>";
  echo "<br><button onclick='window.print()'>Print Struk</button>";
  exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Proses Penjualan</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <div class="form-penjualan">
      <form method="post" action="">
        <h2>Hasil Penjualan Barang</h2>

        <label>Kode Barang</label>
        <input type="text" name="kode" value="<?php echo $_POST['kode'] ?? ''; ?>"><br>

        <label>Nama Barang</label>
        <input type="text" name="nama" value="<?php echo $nama; ?>"><br>

        <label>Harga Barang</label>
        <input type="text" name="harga" value="<?php echo $harga; ?>"><br>

        <label>Jumlah Barang</label>
        <input type="number" name="jumlah" value="<?php echo $_POST['jumlah'] ?? ''; ?>"><br>

        <label>Metode Bayar</label>
        <input type="text" name="metode" value="<?php echo $_POST['metode'] ?? ''; ?>"><br>

        <label>Total Harga</label>
        <input type="text" name="total" value="<?php echo $totalHarga; ?>"><br>

        <label>Diskon</label>
        <input type="text" name="diskon" value="<?php echo $diskon; ?>"><br>

        <label>Total Bayar</label>
        <input type="text" name="totalbayar" value="<?php echo $totalBayar; ?>"><br>

        <button class="btn" type="submit" name="cetak">Cetak</button>
        <a href="index.html"><button type="button" class="btn-small">Kembali</button></a>
      </form>
    </div>
  </div>
</body>
</html>
