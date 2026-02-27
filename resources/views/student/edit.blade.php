<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
</head>
<body>
    <script src="https://cdn.tailwindcss.com"></script>
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Edit Data Siswa</h1>
    
    <form action="{{ route('student.update', $student->id) }}" method="POST" class="max-w-md">
        @csrf
        @method('PUT') <div class="mb-4">
            <label class="block">Nama Siswa</label>
            <input type="text" name="name" value="{{ $student->name }}" class="w-full border p-2 rounded">
        </div>
        <div class="mb-4">
            <label class="block">NISN</label>
            <input type="text" name="nisn" value="{{ $student->nisn }}" class="w-full border p-2 rounded">
        </div>
        <div class="mb-4">
            <label class="block">Alamat</label>
            <input type="text" name="address" value="{{ $student->address }}" class="w-full border p-2 rounded">
        </div>
        <div class="mb-4">
            <label class="block">Tanggal Lahir</label>
            <input type="date" name="date_of_birth" value="{{ $student->date_of_birth }}" class="w-full border p-2 rounded">
        </div>
        <select name="gender" class="form-control" required>
            <option value="Laki-laki" {{ $student->gender == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
            <option value="Perempuan" {{ $student->gender == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
        </select>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
</body>
</html>