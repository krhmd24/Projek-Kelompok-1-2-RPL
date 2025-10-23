@extends('layout')

@section('title', 'Food Diary')

@section('content')
<div class="animate-fadeIn">
    <!-- Judul -->
    <h2 class="text-4xl md:text-5xl font-bold text-green-700 text-center mb-4">
        🧾 Catatan Makanan Harian
    </h2>
    <p class="text-gray-700 text-lg text-center max-w-2xl mx-auto leading-relaxed mb-12">
        Catat makanan yang kamu konsumsi hari ini dan pantau total kalori harianmu.
    </p>

    <!-- Form Input -->
    <div class="bg-white/70 backdrop-blur-md shadow-lg rounded-3xl p-8 max-w-3xl mx-auto mb-12">
        <form action="{{ route('food-diary.tambah') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @csrf
            <div>
                <label class="block text-left font-semibold text-green-800 mb-2">Nama Makanan</label>
                <input type="text" name="makanan" placeholder="Contoh: Nasi Goreng"
                    class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-green-400 outline-none" required>
            </div>

            <div>
                <label class="block text-left font-semibold text-green-800 mb-2">Kalori (kkal)</label>
                <input type="number" name="kalori" placeholder="Contoh: 450"
                    class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-green-400 outline-none" required>
            </div>

            <div>
                <label class="block text-left font-semibold text-green-800 mb-2">Waktu Makan</label>
                <select name="waktu" class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-green-400 outline-none" required>
                    <option value="">-- Pilih --</option>
                    <option value="Sarapan">Sarapan</option>
                    <option value="Makan Siang">Makan Siang</option>
                    <option value="Makan Malam">Makan Malam</option>
                    <option value="Cemilan">Cemilan</option>
                </select>
            </div>

            <div class="flex items-end">
                <button type="submit"
                    class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition w-full md:w-auto">
                    Tambahkan 🍽️
                </button>
            </div>
        </form>
    </div>

    <!-- Tabel Catatan Makanan -->
    <div class="bg-white shadow-lg rounded-3xl p-8 max-w-5xl mx-auto">
        <h3 class="text-2xl font-semibold text-green-700 mb-6">📋 Daftar Makanan Hari Ini</h3>

        @if (count($foods) > 0)
        <table class="w-full border-collapse text-left">
            <thead>
                <tr class="bg-green-100 text-green-900">
                    <th class="py-3 px-4 rounded-tl-2xl">Nama Makanan</th>
                    <th class="py-3 px-4">Waktu Makan</th>
                    <th class="py-3 px-4">Kalori</th>
                    <th class="py-3 px-4 rounded-tr-2xl">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($foods as $food)
                <tr class="border-b hover:bg-green-50 transition">
                    <td class="py-3 px-4">{{ $food['makanan'] }}</td>
                    <td class="py-3 px-4">{{ $food['waktu'] }}</td>
                    <td class="py-3 px-4">{{ $food['kalori'] }}</td>
                    <td class="py-3 px-4">
                        <form action="{{ route('food-diary.hapus', $food['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Total Kalori -->
        <div class="mt-6 text-right">
            <p class="text-lg font-semibold text-green-800">
                Total Kalori Hari Ini: <span class="text-emerald-600">{{ $totalKalori }} kkal</span>
            </p>
        </div>
        @else
        <p class="text-gray-500 text-center">Belum ada catatan makanan hari ini 🍴</p>
        @endif
    </div>
</div>
@endsection
