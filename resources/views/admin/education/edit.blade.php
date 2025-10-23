@extends('layout')

@section('title', 'Edit Edukasi Gizi')

@section('content')
<div class="max-w-3xl mx-auto p-6">
    <h2 class="text-2xl font-bold text-green-700 mb-4 text-center">Edit Artikel Edukasi Gizi</h2>

    <form action="{{ route('admin.education.update', $education->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="mb-4">
            <label class="font-semibold text-green-700 block mb-1">Judul</label>
            <input type="text" name="judul" value="{{ $education->judul }}" class="w-full border p-3 rounded" required>
        </div>

        <div class="mb-4">
            <label class="font-semibold text-green-700 block mb-1">Deskripsi</label>
            <textarea name="deskripsi" rows="5" class="w-full border p-3 rounded" required>{{ $education->deskripsi }}</textarea>
        </div>

        <div class="mb-4">
            <label class="font-semibold text-green-700 block mb-1">Gambar</label>
            <input type="file" name="gambar" accept="image/*" class="w-full border p-2 rounded">
            @if($education->gambar)
                <img src="{{ asset('storage/'.$education->gambar) }}" width="120" class="mt-2 rounded">
            @endif
        </div>

        <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700">Perbarui</button>
    </form>
</div>
@endsection
