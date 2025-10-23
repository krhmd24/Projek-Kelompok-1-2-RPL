<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PertumbuhanController extends Controller
{
    public function index()
    {
        $data = session('growth', []);
        return view('pemantauan-pertumbuhan', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'usia' => 'required|numeric|min:0',
            'tinggi' => 'required|numeric|min:0',
            'berat' => 'required|numeric|min:0',
        ]);

        // Ambil data lama dari session
        $data = session('growth', []);

        // Tambahkan data baru
        $data[] = [
            'id' => uniqid(),
            'nama' => $request->nama,
            'usia' => $request->usia,
            'tinggi' => $request->tinggi,
            'berat' => $request->berat,
        ];

        // Simpan kembali ke session
        session(['growth' => $data]);

        return redirect()->route('pemantauan');
    }
}
