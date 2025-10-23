@extends('layout')

@section('title', 'Tambah Edukasi Gizi')

@section('content')
<div class="max-w-3xl mx-auto p-6">
    <h2 class="text-2xl font-bold text-green-700 mb-4 text-center">Tambah Artikel Edukasi Gizi</h2>

    <form action="{{ route('admin.education.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label class="font-semibold text-green-700 block mb-1">Judul</label>
            <input type="text" name="judul" class="w-full border p-3 rounded" required>
        </div>

        <div class="mb-4">
            <label class="font-semibold text-green-700 block mb-1">Deskripsi</label>
            <textarea name="deskripsi" rows="5" class="w-full border p-3 rounded" required></textarea>
        </div>

        <div class="mb-4">
            <label class="font-semibold text-green-700 block mb-1">Gambar</label>
            <input type="file" name="gambar" accept="image/*" class="w-full border p-2 rounded">
        </div>

        <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700">Simpan</button>
    </form>
</div>
@endsection
