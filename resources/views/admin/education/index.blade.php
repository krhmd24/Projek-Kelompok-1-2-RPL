@extends('layout')

@section('title', 'Kelola Edukasi Gizi')

@section('content')
<div class="max-w-5xl mx-auto p-6">
    <h2 class="text-3xl font-bold text-green-700 mb-6 text-center">Kelola Edukasi Gizi</h2>

    <div class="text-right mb-4">
        <a href="{{ route('admin.education.create') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">+ Tambah Artikel</a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-3 rounded mb-4">{{ session('success') }}</div>
    @endif

    <table class="w-full border-collapse border border-gray-300">
        <thead class="bg-green-100">
            <tr>
                <th class="border p-2">Judul</th>
                <th class="border p-2">Deskripsi</th>
                <th class="border p-2">Gambar</th>
                <th class="border p-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($educations as $education)
                <tr>
                    <td class="border p-2 font-semibold">{{ $education->judul }}</td>
                    <td class="border p-2 text-gray-700">{{ Str::limit($education->deskripsi, 60) }}</td>
                    <td class="border p-2 text-center">
                        @if($education->gambar)
                            <img src="{{ asset('storage/'.$education->gambar) }}" width="80" class="rounded">
                        @else
                            <span class="text-gray-400">Tidak ada</span>
                        @endif
                    </td>
                    <td class="border p-2 text-center">
                        <a href="{{ route('admin.education.edit', $education->id) }}" class="text-blue-600 hover:underline mr-2">Edit</a>
                        <form action="{{ route('admin.education.destroy', $education->id) }}" method="POST" class="inline-block">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Yakin ingin menghapus artikel ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
