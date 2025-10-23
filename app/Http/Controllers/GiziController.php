<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GiziController extends Controller
{
    public function hitung(Request $request)
    {
        $request->validate([
            'usia' => 'required|numeric|min:1',
            'berat' => 'required|numeric|min:1',
            'tinggi' => 'required|numeric|min:1',
            'aktivitas' => 'required',
        ]);

        $usia = $request->usia;
        $berat = $request->berat;
        $tinggi = $request->tinggi;
        $aktivitas = $request->aktivitas;

        // Rumus BMR (Mifflin-St Jeor, untuk contoh)
        $bmr = (10 * $berat) + (6.25 * $tinggi) - (5 * $usia) + 5; // asumsi pria

        // Faktor aktivitas
        $faktor = [
            'rendah' => 1.2,
            'sedang' => 1.55,
            'tinggi' => 1.9
        ];

        $kalori = $bmr * $faktor[$aktivitas];
        $protein = $berat * 1.2;
        $karbo = ($kalori * 0.55) / 4; // 55% dari kalori untuk karbohidrat

        return view('kalkulator', compact('kalori', 'protein', 'karbo'));
    }
}
