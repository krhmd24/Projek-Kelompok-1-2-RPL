@extends('layout')

@section('title', 'Menu Sehat')

@section('content')
<div class="text-center animate-fadeIn">

    <!-- Judul -->
    <h2 class="text-4xl md:text-5xl font-bold text-green-700 mb-4">
        🍽️ Rekomendasi Menu Sehat
    </h2>
    <p class="text-gray-700 text-lg max-w-2xl mx-auto leading-relaxed mb-12">
        Pilih makanan bergizi seimbang sesuai kebutuhan harianmu.  
        Menu berikut dirancang untuk sarapan, makan siang, dan makan malam.
    </p>

    <!-- Kotak daftar menu -->
    <div class="overflow-x-auto">
        <!-- Sarapan --> 
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
   
        <div class="menu-card">
            <img src="{{ asset('images/roti.png') }}" alt="Sarapan Sehat" class="menu-img">
            <div class="p-4">
                <h3 class="text-2xl font-semibold text-green-700 mb-2">🍞 Sarapan Sehat</h3>
                <p class="text-gray-600 text-base mb-3">
                    Roti gandum panggang, telur rebus, dan segelas jus jeruk segar.  
                    Memberikan energi dan serat tinggi untuk memulai hari.
                </p>
                <span class="tag">Kalori: ±350 kkal</span>
            </div>
        </div>

        <!-- Makan Siang -->
        <div class="menu-card">
            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=800&q=80" alt="Makan Siang Sehat" class="menu-img">
            <div class="p-4">
                <h3 class="text-2xl font-semibold text-green-700 mb-2">🥗 Makan Siang Seimbang</h3>
                <p class="text-gray-600 text-base mb-3">
                    Nasi merah, dada ayam panggang, sayur tumis, dan air mineral.  
                    Menyeimbangkan karbohidrat, protein, dan vitamin.
                </p>
                <span class="tag">Kalori: ±550 kkal</span>
            </div>
        </div>

        <!-- Makan Malam -->
        <div class="menu-card">
            <img src="{{ asset('images/nyamm.png') }}" alt="Makan Malam Sehat" class="menu-img">
            <div class="p-4">
                <h3 class="text-2xl font-semibold text-green-700 mb-2">🍚 Makan Malam Ringan</h3>
                <p class="text-gray-600 text-base mb-3">
                    Sup sayur bening, tahu kukus, dan buah potong.  
                    Ringan di malam hari tapi tetap bernutrisi tinggi.
                </p>
                <span class="tag">Kalori: ±300 kkal</span>
            </div>
        </div>

        <!-- Makan Malam -->
        <!-- <div class="menu-card">
            <img src="{{ asset('images/nyamm.png') }}" alt="Makan Malam Sehat" class="menu-img">
            <div class="p-4">
                <h3 class="text-2xl font-semibold text-green-700 mb-2">🍚 Makan Malam Ringan</h3>
                <p class="text-gray-600 text-base mb-3">
                    Sup sayur bening, tahu kukus, dan buah potong.  
                    Ringan di malam hari tapi tetap bernutrisi tinggi.
                </p>
                <span class="tag">Kalori: ±300 kkal</span>
            </div>
        </div> -->

       <!-- makan mamat -->
         <!-- <div class ="menu-card">
            <img src = "{{asset('images/mamat.jpg') }}" alt="Makan MAMAt Biar Sehat" class="menu-img">
            <div class="p-4">
                <h3 class="text-2xl font-semibold text-green-700 mb-2"> Makan Malam Sehat</h3>
                <p class="text-gray-600 text-base mb-3">
                    makan malam dengan menu mamat tidak akan membuat anda semua mati.
                </p> --> 
    </div>
</div>
@endsection
 