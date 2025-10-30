<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LokasiController extends Controller
{
    public function index()
    {
        // Data dummy untuk pasar/food bank
        $lokasiData = [
            ['nama' => 'Pasar Murah Sehat', 'lat' => -6.202, 'lon' => 106.816],
            ['nama' => 'Food Bank Peduli Gizi', 'lat' => -6.204, 'lon' => 106.820],
            ['nama' => 'Warung Sayur Segar', 'lat' => -6.207, 'lon' => 106.814],
        ];

        return view('akses-lokasi', compact('lokasiData'));
    }
}
