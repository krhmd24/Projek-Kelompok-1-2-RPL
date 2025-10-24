@extends('layout')

@section('content')
<!-- Hero Section -->
<section class="relative bg-cover bg-center" style="background-image: url('/images/edukasi.jpg');">
    <div class="bg-black bg-opacity-50 py-20">
        <div class="text-center text-white">
            <h1 class="text-4xl font-bold mb-4 tracking-wide">Belajar makan sehat, dan Makin Kuat!</h1>
            
            <!-- Search Bar -->
            <div class="flex justify-center mt-6">
                <input 
                    type="text" 
                    placeholder="Cari artikel..." 
                    class="w-3/4 md:w-1/2 px-4 py-3 rounded-full text-gray-800 focus:outline-none focus:ring-2 focus:ring-green-400"
                >
            </div>
        </div>
    </div>
</section>

<!-- Kategori Section -->
<section class="py-10 bg-white text-center">
    <div class="text-white mb-6">
        <h2 class="text-xl font-semibold mb-3">Kategori</h2>
        <div class="flex justify-center space-x-20">
            <button class="bg-green-200 text-black px-6 py-2 rounded-full font-medium hover:bg-green-300 transition">Balita</button>
            <button class="bg-green-200 text-black px-6 py-2 rounded-full font-medium hover:bg-green-300 transition">Remaja</button>
            <button class="bg-green-200 text-black px-6 py-2 rounded-full font-medium hover:bg-green-300 transition">Dewasa</button>
            <button class="bg-green-200 text-black px-6 py-2 rounded-full font-medium hover:bg-green-300 transition">Lansia</button>
        </div>
    </div>

    <!-- Artikel Terbaru -->
    <div class="mt-10 px-8">
        <h3 class="text-lg text-black-300 font-semibold text-left mb-6">Artikel Terbaru</h3>
        <div class="grid md:grid-cols-3 gap-6 justify-center">
            <!-- Artikel 1 -->
            <div class="bg-gray-800 rounded-2xl overflow-hidden shadow-md">
                <img src="/images/balita.jpg" alt="Artikel Balita" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h4 class="text-white font-semibold">Judul Artikel Balita</h4>
                    <p class="text-gray-400 text-sm mt-2">Deskripsi singkat artikel...</p>
                </div>
            </div>

            <!-- Artikel 2 -->
            <div class="bg-gray-800 rounded-2xl overflow-hidden shadow-md">
                <img src="/images/lansia.jpg" alt="Artikel Lansia" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h4 class="text-white font-semibold">Judul Artikel Lansia</h4>
                    <p class="text-gray-400 text-sm mt-2">Deskripsi singkat artikel...</p>
                </div>
            </div>

            <!-- Artikel 3 -->
            <div class="bg-gray-800 rounded-2xl overflow-hidden shadow-md">
                <img src="/images/remaja.jpg" alt="Artikel Remaja" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h4 class="text-white font-semibold">Judul Artikel Remaja</h4>
                    <p class="text-gray-400 text-sm mt-2">Deskripsi singkat artikel...</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
