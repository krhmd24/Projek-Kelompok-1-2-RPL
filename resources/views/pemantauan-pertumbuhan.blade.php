@extends('layout')

@section('title', 'Pemantauan Pertumbuhan')

@section('content')
<div class="animate-fadeIn">
    <h2 class="text-4xl md:text-5xl font-bold text-green-700 text-center mb-4">
        📈 Pemantauan Pertumbuhan Anak
    </h2>
    <p class="text-gray-700 text-lg text-center max-w-2xl mx-auto leading-relaxed mb-12">
        Masukkan data anak untuk memantau tinggi dan berat badan terhadap usia.  
        Grafik di bawah akan memperlihatkan perkembangan pertumbuhannya.
    </p>

    <!-- Form Input -->
    <div class="bg-white/70 backdrop-blur-md shadow-lg rounded-3xl p-8 max-w-3xl mx-auto mb-12">
        <form action="{{ route('pemantauan.store') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @csrf
            <div>
                <label class="block text-left font-semibold text-green-800 mb-2">Nama Anak</label>
                <input type="text" name="nama" placeholder="Contoh: Andi"
                    class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-green-400 outline-none" required>
            </div>
            <div>
                <label class="block text-left font-semibold text-green-800 mb-2">Usia (tahun)</label>
                <input type="number" name="usia" placeholder="Contoh: 5"
                    class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-green-400 outline-none" required>
            </div>
            <div>
                <label class="block text-left font-semibold text-green-800 mb-2">Tinggi Badan (cm)</label>
                <input type="number" name="tinggi" placeholder="Contoh: 110"
                    class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-green-400 outline-none" required>
            </div>
            <div>
                <label class="block text-left font-semibold text-green-800 mb-2">Berat Badan (kg)</label>
                <input type="number" name="berat" placeholder="Contoh: 18"
                    class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-green-400 outline-none" required>
            </div>
            <div class="md:col-span-2 flex justify-center">
                <button type="submit"
                    class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition w-full md:w-auto">
                    Tambahkan Data 📊
                </button>
            </div>
        </form>
    </div>

    <!-- Grafik -->
    <div class="bg-white shadow-lg rounded-3xl p-8 max-w-5xl mx-auto">
        <h3 class="text-2xl font-semibold text-green-700 mb-6">📉 Grafik Pertumbuhan</h3>

        @if(count($data) > 0)
            <canvas id="growthChart" height="100"></canvas>
        @else
            <p class="text-gray-500 text-center">Belum ada data pertumbuhan. Tambahkan data di atas 📈</p>
        @endif
    </div>
</div>

@if(count($data) > 0)
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('growthChart').getContext('2d');
const chartData = @json($data);

const labels = chartData.map(d => d.usia + " th");
const tinggi = chartData.map(d => d.tinggi);
const berat = chartData.map(d => d.berat);

new Chart(ctx, {
    type: 'line',
    data: {
        labels: labels,
        datasets: [
            {
                label: 'Tinggi (cm)',
                data: tinggi,
                borderColor: '#16a34a',
                backgroundColor: '#dcfce7',
                fill: true,
                tension: 0.4
            },
            {
                label: 'Berat (kg)',
                data: berat,
                borderColor: '#2563eb',
                backgroundColor: '#dbeafe',
                fill: true,
                tension: 0.4
            }
        ]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
@endif
@endsection
