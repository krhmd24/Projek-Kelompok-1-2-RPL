@extends('layout')

@section('title', 'Dashboard')

@section('content')
<div class="text-center animate-fadeIn">

    <!-- Judul tanpa kotak -->
    <h2 class="text-4xl md:text-5xl font-bold text-green-700 mb-4">
        Selamat Datang di <span class="text-emerald-600">NutriCare</span> 🌿
    </h2>
    <p class="text-gray-700 text-lg max-w-2xl mx-auto leading-relaxed mb-12">
        Sahabat gizi seimbang Anda — bantu pantau kebutuhan gizi harian, dapatkan rekomendasi menu sehat, dan jalani hidup lebih baik.
    </p>

    <!-- 3 Fitur dengan Kotak -->
    <div class="bg-white/70 backdrop-blur-md shadow-lg rounded-3xl p-10 mx-auto max-w-5xl">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <a href="/kalkulator-gizi" class="feature-card">
                <div class="icon bg-green-100 text-green-700">🧮</div>
                <h3 class="text-xl font-semibold text-green-700 mb-2">Kalkulator Gizi</h3>
                <p class="text-gray-600">Hitung kebutuhan kalori, protein, dan karbohidrat harianmu.</p>
            </a>

            <a href="#" class="feature-card">
                <div class="icon bg-lime-100 text-lime-700">🥗</div>
                <h3 class="text-xl font-semibold text-green-700 mb-2">Menu Sehat</h3>
                <p class="text-gray-600">Temukan inspirasi makanan sehat dan lezat sesuai kebutuhanmu.</p>
            </a>

            <a href="#" class="feature-card">
                <div class="icon bg-emerald-100 text-emerald-700">📘</div>
                <h3 class="text-xl font-semibold text-green-700 mb-2">Food Diary</h3>
                <p class="text-gray-600">Catat makanan harian dan pantau status gizi tubuhmu.</p>
            </a>
        </div>
    </div>
</div>
@endsection
