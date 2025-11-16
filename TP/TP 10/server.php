<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo 'Metode tidak diizinkan.';
    exit;
}

$nama = isset($_POST['nama']) ? trim($_POST['nama']) : '';

if ($nama === '') {
    http_response_code(400);
    echo 'Nama tidak boleh kosong.';
    exit;
}

$namaBersih = htmlspecialchars($nama, ENT_QUOTES, 'UTF-8');
echo "Halo, {$namaBersih}! Selamat datang di AJAX!";
