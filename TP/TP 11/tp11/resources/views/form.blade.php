<!DOCTYPE html>
<html>
<head>
    <title>Form Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="bg-white shadow-lg rounded-lg p-8 w-96">
        <h2 class="text-2xl font-bold mb-6 text-center">Input Data Mahasiswa</h2>

        <form method="POST" action="/simpan" class="space-y-4">
            @csrf

            <div>
                <label class="block font-semibold mb-1">Nama</label>
                <input type="text" name="nama"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-blue-500 focus:ring focus:ring-blue-200 outline-none"
                    required>
            </div>

            <div>
                <label class="block font-semibold mb-1">NIM</label>
                <input type="text" name="nim"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-blue-500 focus:ring focus:ring-blue-200 outline-none"
                    required>
            </div>

            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg font-semibold transition">
                Simpan ke Session
            </button>
        </form>
    </div>

</body>
</html>
