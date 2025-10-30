@extends('layout')

@section('title', 'Edukasi Gizi Seimbang')

@section('content')

<!-- 🌱 Hero Section -->
<section class="relative bg-cover bg-center" style="background-image: url('/images/dasboard.jpg');">
    <div class="bg-black/60 py-20 text-center text-white">
        <h1 class="text-4xl md:text-5xl font-bold mb-4 tracking-wide">Belajar Makan Sehat, Hidup Lebih Kuat</h1>
        <p class="text-lg max-w-2xl mx-auto opacity-90">Pahami pentingnya gizi seimbang di setiap tahap kehidupan — dari balita hingga lansia.</p>

        <!-- 🔍 Search Bar -->
        <div class="flex justify-center mt-6">
            <input 
                type="text" 
                placeholder="Cari artikel..." 
                class="w-3/4 md:w-1/2 px-5 py-3 rounded-full text-gray-800 focus:outline-none focus:ring-4 focus:ring-green-400 shadow-md"
            >
        </div>
    </div>
</section>

<!-- 🌿 Kategori Section -->
<section class="py-14 bg-gradient-to-b from-white to-green-50 text-center">
    <h2 class="text-3xl font-bold text-green-800 mb-10">Kategori Artikel Edukasi</h2>

    <div class="flex flex-wrap justify-center gap-6 mb-12">
        <button class="kategori-btn active">Balita 👶</button>
        <button class="kategori-btn">Remaja 🧑‍🎓</button>
        <button class="kategori-btn">Dewasa 🧑‍💼</button>
        <button class="kategori-btn">Lansia 👵</button>
    </div>

    <!-- 📰 Artikel Berdasarkan Kategori -->
    <div id="artikel-container" class="grid md:grid-cols-3 gap-8 px-8 max-w-7xl mx-auto">
        <!-- Balita -->
        <div class="artikel" data-kategori="Balita">
            <div class="bg-white rounded-3xl shadow-md overflow-hidden hover:shadow-2xl transition">
                <img src="/images/balita.jpg" alt="Gizi Anak" class="w-full h-52 object-cover">
                <div class="p-5 text-left">
                    <h3 class="text-2xl font-semibold text-green-700 mb-2">🍎 Gizi Seimbang untuk Tumbuh Kembang Balita</h3>
                    <p class="text-gray-600 mb-3">Sayur dan buah mengandung vitamin dan mineral penting yang membantu tumbuh kembang tulang, otak, dan daya tahan tubuh balita.</p>
                    <a href="#" class="text-green-600 font-medium hover:text-green-800">Baca Selengkapnya →</a>
                </div>
            </div>
        </div>

        <!-- Remaja -->
        <div class="artikel hidden" data-kategori="Remaja">
            <div class="bg-white rounded-3xl shadow-md overflow-hidden hover:shadow-2xl transition">
                <img src="/images/remaja.jpg" alt="Gizi Remaja" class="w-full h-52 object-cover">
                <div class="p-5 text-left">
                    <h3 class="text-2xl font-semibold text-green-700 mb-2">🥗 Gizi Seimbang untuk Masa Pertumbuhan</h3>
                    <p class="text-gray-600 mb-3">Remaja butuh gizi cukup untuk mendukung aktivitas fisik dan perkembangan tubuh yang pesat.</p>
                    <a href="#" class="text-green-600 font-medium hover:text-green-800">Baca Selengkapnya →</a>
                </div>
            </div>
        </div>

        <!-- Dewasa -->
        <div class="artikel hidden" data-kategori="Dewasa">
            <div class="bg-white rounded-3xl shadow-md overflow-hidden hover:shadow-2xl transition">
                <img src="/images/dewasa.jpg" alt="Gizi Dewasa" class="w-full h-52 object-cover">
                <div class="p-5 text-left">
                    <h3 class="text-2xl font-semibold text-green-700 mb-2">🍛 Pola Makan Seimbang untuk Dewasa</h3>
                    <p class="text-gray-600 mb-3">Konsumsi karbohidrat kompleks, protein tanpa lemak, dan serat untuk energi optimal setiap hari.</p>
                    <a href="#" class="text-green-600 font-medium hover:text-green-800">Baca Selengkapnya →</a>
                </div>
            </div>
        </div>

        <!-- Lansia -->
        <div class="artikel hidden" data-kategori="Lansia">
            <div class="bg-white rounded-3xl shadow-md overflow-hidden hover:shadow-2xl transition">
                <img src="/images/lansia.jpg" alt="Gizi Lansia" class="w-full h-52 object-cover">
                <div class="p-5 text-left">
                    <h3 class="text-2xl font-semibold text-green-700 mb-2">💧 Gizi Seimbang untuk Lansia</h3>
                    <p class="text-gray-600 mb-3">Nutrisi tinggi serat dan rendah garam penting untuk menjaga kesehatan jantung dan pencernaan lansia.</p>
                    <a href="#" class="text-green-600 font-medium hover:text-green-800">Baca Selengkapnya →</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 🌈 Script Interaksi -->
<script>
    const buttons = document.querySelectorAll('.kategori-btn');
    const articles = document.querySelectorAll('.artikel');

    buttons.forEach(btn => {
        btn.addEventListener('click', () => {
            buttons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const kategori = btn.textContent.trim().split(' ')[0];
            articles.forEach(a => {
                a.classList.toggle('hidden', a.dataset.kategori !== kategori);
            });
        });
    });
</script>

@endsection
