@extends('layout')

@section('title', 'Edukasi Gizi')

@section('content')

<div class="animate-fadeIn">
    
    <!-- Judul -->
    <h2 class="text-4xl md:text-5xl font-bold text-green-700 text-center mb-4">
        📚 Edukasi Gizi Seimbang
    </h2>
    <p class="text-gray-700 text-lg text-center max-w-2xl mx-auto leading-relaxed mb-12">
        Pelajari pentingnya gizi seimbang untuk mendukung pertumbuhan dan kesehatan tubuh.  
        Dapatkan informasi, tips, dan artikel menarik seputar dunia gizi!
    </p>

    <!-- Daftar Artikel -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
        <!-- Artikel 1 -->
        <div class="article-card">
            <img src="{{ asset('images/sarapan.jpg') }}" alt="Sarapan Sehat" class="edukasi">
            <div class="p-5">
                <h3 class="text-2xl font-semibold text-green-700 mb-3">🍞 Pentingnya Sarapan Sehat</h3>
                <p class="text-gray-600 mb-4">
                    Sarapan memberi energi untuk memulai hari, meningkatkan konsentrasi, dan menjaga metabolisme tubuh tetap stabil.
                </p>
                <a href="#" class="read-more">Baca Selengkapnya →</a>
            </div>
        </div>

        <!-- Artikel 2 -->
        <div class="article-card">
            <img src="{{ asset('images/airputih.jpg') }}" alt="Air Putih" class="edukasi">
            <div class="p-5">
                <h3 class="text-2xl font-semibold text-green-700 mb-3">💧 Pentingnya Minum Air Putih</h3>
                <p class="text-gray-600 mb-4">
                    Tubuh manusia terdiri dari 60% air. Minum air cukup setiap hari membantu pencernaan, sirkulasi, dan fungsi otak.
                </p>
                <a href="#" class="read-more">Baca Selengkapnya →</a>
            </div>
        </div>

        <!-- Artikel 3 -->
        <div class="article-card">
            <img src="https://images.unsplash.com/photo-1506084868230-bb9d95c24759?auto=format&fit=crop&w=900&q=80" alt="Porsi Makan Seimbang" class="edukasi">
            <div class="p-5">
                <h3 class="text-2xl font-semibold text-green-700 mb-3">🥗 Porsi Makan yang Seimbang</h3>
                <p class="text-gray-600 mb-4">
                    Gunakan konsep “Isi Piringku”: separuh sayur dan buah, seperempat karbohidrat, dan seperempat protein setiap kali makan.
                </p>
                <a href="#" class="read-more">Baca Selengkapnya →</a>
            </div>
        </div>
    </div>
</div>
@endsection
