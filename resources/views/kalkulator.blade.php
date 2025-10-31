@extends('layout')

@section('title', 'Kalkulator Gizi')

@section('content')
<h2 class="text-4xl font-bold text-green-700 mb-8 text-center">🧮 Kalkulator Gizi Harian</h2>
<p class="text-gray-700 mb-8 text-center max-w-2xl mx-auto">
    Isi data di bawah ini untuk mengetahui kebutuhan kalori, protein, dan karbohidrat harianmu.
</p>

<form method="POST" action="{{ route('hitung.gizi') }}" class="bg-white shadow-xl rounded-2xl p-8 max-w-lg mx-auto">
    @csrf
    <div class="mb-4">
        <label class="block font-semibold mb-2 text-left">Usia (tahun)</label>
        <input type="number" name="usia" class="w-full border rounded-lg p-2" required>
    </div>
    <div class="mb-4">
        <label class="block font-semibold mb-2 text-left">Berat Badan (kg)</label>
        <input type="number" name="berat" class="w-full border rounded-lg p-2" required>
    </div>
    <div class="mb-4">
        <label class="block font-semibold mb-2 text-left">Tinggi Badan (cm)</label>
        <input type="number" name="tinggi" class="w-full border rounded-lg p-2" required>
    </div>
    <div class="mb-6">
        <label class="block font-semibold mb-2 text-left">Tingkat Aktivitas</label>
        <select name="aktivitas" class="w-full border rounded-lg p-2" required>
            <option value="">-- Pilih --</option>
            <option value="rendah">Rendah (jarang olahraga)</option>
            <option value="sedang">Sedang (3–5x seminggu)</option>
            <option value="tinggi">Tinggi (6–7x seminggu)</option>
        </select>
    </div>

    <button type="submit" class="bg-green-600 text-white py-2 px-6 rounded-lg hover:bg-green-700 transition">
        Hitung Sekarang
    </button>
</form>

<<<<<<< HEAD
=======
{{-- Tampilkan hasil hanya jika variabel tersedia --}}
>>>>>>> df9df1e4b4421448939068a467c8e2732987f62c
@if(isset($kalori))
<div class="mt-12 bg-green-50 p-6 rounded-2xl shadow-md max-w-lg mx-auto text-center">
    <h3 class="text-2xl font-bold text-green-700 mb-4">💡 Hasil Perhitungan</h3>
    <p><strong>Kebutuhan Kalori:</strong> {{ number_format($kalori, 0) }} kkal/hari</p>
    <p><strong>Protein:</strong> {{ number_format($protein, 1) }} gram/hari</p>
    <p><strong>Karbohidrat:</strong> {{ number_format($karbo, 1) }} gram/hari</p>
</div>
@endif
@endsection
