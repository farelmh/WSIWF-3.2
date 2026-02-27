<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
</head>
<body>
    <script src="https://cdn.tailwindcss.com"></script>
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Tambah Data Siswa</h1>
    
    <form action="{{ route('student.store') }}" method="POST" class="max-w-md">
        @csrf
        <div class="mb-4">
            <label class="block">Nama Siswa</label>
            <input type="text" name="name" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block">NISN</label>
            <input type="text" name="nisn" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block">Alamat</label>
            <input type="text" name="address" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block font-weight-bold">Tanggal Lahir</label>
            <input type="date" name="date_of_birth" class="form-control" required>
        </div>

        <div class="mb-4">
            <label class="block font-weight-bold">Jenis Kelamin</label>
            <select name="gender" class="form-control" required>
                <option value="">-- Pilih Jenis Kelamin --</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Simpan</button>
        <a href="{{ route('student.index') }}" class="text-gray-500 ml-2">Batal</a>
    </form>
</div>
</body>
</html>