<?php
$conn = mysqli_connect("localhost:3307", "root", "", "kampus");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
