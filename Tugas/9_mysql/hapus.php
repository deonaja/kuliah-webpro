<?php
include 'koneksi.php';
$kode = $_GET['Kode_MK'];

mysqli_query($conn, "DELETE FROM matakuliah WHERE Kode_MK='$kode'");
header("Location: index.php");
?>
