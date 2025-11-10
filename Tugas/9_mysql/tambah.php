<?php
include 'koneksi.php';

$kode = $_POST['Kode_MK'];
$nama = $_POST['Nama_MK'];
$sks = $_POST['SKS'];
$semester = $_POST['Semester'];

$query = "INSERT INTO matakuliah VALUES ('$kode', '$nama', '$sks', '$semester')";
mysqli_query($conn, $query);

header("Location: index.php");
?>
