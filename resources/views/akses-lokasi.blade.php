@extends('layout')

@section('title', 'Akses Lokasi')

@section('content')
<div class="text-center mb-10">
    <h2 class="text-3xl font-bold text-green-700 mb-2">📍 Akses Lokasi Pangan Sehat</h2>
    <p class="text-gray-600 max-w-2xl mx-auto">
        Temukan pasar, warung sehat, dan food bank terdekat dari lokasimu.  
        Aktifkan izin lokasi agar peta bisa menampilkan area sekitarmu.
    </p>
</div>

<!-- Elemen peta -->
<div id="map" class="w-full h-96 rounded-2xl shadow-lg border border-green-200"></div>

<!-- Leaflet CSS & JS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const map = L.map('map').setView([-6.2, 106.8], 13); // default Jakarta

    // Peta dasar
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    // Tambahkan marker lokasi dari Laravel
    const lokasiData = @json($lokasiData);
    lokasiData.forEach(tempat => {
        L.marker([tempat.lat, tempat.lon]).addTo(map)
            .bindPopup(`<b>${tempat.nama}</b><br>Tersedia bahan pangan bergizi.`);
    });

    // Dapatkan lokasi user
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(position => {
            const lat = position.coords.latitude;
            const lon = position.coords.longitude;

            // Tambahkan marker lokasi pengguna
            L.marker([lat, lon], { icon: L.icon({
                iconUrl: 'https://cdn-icons-png.flaticon.com/512/684/684908.png',
                iconSize: [40, 40]
            })}).addTo(map).bindPopup("Lokasi Kamu Sekarang 🏠").openPopup();

            // Geser map ke posisi user
            map.setView([lat, lon], 15);
        }, () => alert("Gagal mendeteksi lokasi pengguna."));
    } else {
        alert("Browser tidak mendukung fitur lokasi.");
    }
});
</script>
@endsection
