<?php

namespace App\Http\Controllers;

use App\Models\destinasi;
use Illuminate\Http\Request;

class DestinasiController extends Controller
{
    public function index()
    {
        return  view('wisata.index');
    }

    public function cari(Request $request)
    {
        $aktivitas = $request->input('aktivitas');
        $budget = $request->input('budget');
        $durasi = $request->input('durasi');

        if ($budget == '<500') {
            $harga_min = 0;
            $harga_max = 500000;
        } elseif ($budget == '500-1jt') {
            $harga_min = 500000;
            $harga_max = 1000000;
        } elseif ($budget == '1jt>') {
            $harga_min = 1000000;
            $harga_max = 10000000;
        } else {
            $harga_min = 0;
            $harga_max = 10000000;
        }
        $query = destinasi::query();
        if ($aktivitas) {
            $query->where('aktivitas', $aktivitas);
        }
        $query->whereBetween('harga', [$harga_min, $harga_max]);
        if ($durasi) {
            $query->whereBetween('durasi', [1, $durasi]);
        }
        $destinations = $query->get();

        return view('wisata.rekomendasi', compact('destinations'));
    }
}
