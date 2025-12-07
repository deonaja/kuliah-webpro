<!DOCTYPE html>
<html>
<head>
    <title>Tampil Data</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="bg-white shadow-lg rounded-lg p-8 w-96 text-center">
        <h2 class="text-2xl font-bold mb-6">Data dari Session</h2>

        <p class="text-lg mb-2"><span class="font-semibold">Nama:</span> {{ session('nama') }}</p>
        <p class="text-lg mb-6"><span class="font-semibold">NIM:</span> {{ session('nim') }}</p>

        <a href="/form"
           class="inline-block bg-gray-700 hover:bg-black text-white px-4 py-2 rounded-lg transition">
           Kembali ke Form
        </a>
    </div>

</body>
</html>
