<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodDiaryController extends Controller
{
    // Simpan data sementara di session (nanti bisa diganti database)
    public function index(Request $request)
    {
        $foods = session('foods', []); // ambil dari session
        $totalKalori = array_sum(array_column($foods, 'kalori'));
        return view('food-diary', compact('foods', 'totalKalori'));
    }

    public function tambah(Request $request)
    {
        $request->validate([
            'makanan' => 'required|string|max:255',
            'kalori' => 'required|numeric|min:0',
            'waktu' => 'required|string',
        ]);

        // Ambil data lama
        $foods = session('foods', []);

        // Tambah data baru
        $foods[] = [
            'id' => uniqid(),
            'makanan' => $request->makanan,
            'kalori' => $request->kalori,
            'waktu' => $request->waktu,
        ];

        // Simpan kembali ke session
        session(['foods' => $foods]);

        return redirect()->route('food-diary');
    }

    public function hapus($id)
    {
        $foods = session('foods', []);
        $foods = array_filter($foods, fn($f) => $f['id'] != $id);
        session(['foods' => $foods]);
        return redirect()->route('food-diary');
    }
}
