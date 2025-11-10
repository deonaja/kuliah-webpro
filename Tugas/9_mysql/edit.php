<?php
include 'koneksi.php';

$kode = $_POST['Kode_MK'];
$nama = $_POST['Nama_MK'];
$sks = $_POST['SKS'];
$semester = $_POST['Semester'];

$query = "UPDATE matakuliah SET Nama_MK='$nama', SKS='$sks', Semester='$semester' WHERE Kode_MK='$kode'";
mysqli_query($conn, $query);

header("Location: index.php");
?>
