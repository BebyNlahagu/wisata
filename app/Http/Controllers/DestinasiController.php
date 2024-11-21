<?php

namespace App\Http\Controllers;

use App\Models\destinasi;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DestinasiController extends Controller
{
    public function keren()
    {
        $destinasi = destinasi::all();
        $rating = Rating::with('destinasi')->get();
        return view('wisata.rate', compact('rating', 'destinasi'));
    }

    public function index()
    {
        $destinasi = destinasi::all();
        return  view('admin.destinasi.index', compact('destinasi'));
    }

    public function home()
    {
        return view('wisata.index');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'aktivitas' => 'required',
            'harga' => 'required',
            'durasi' => 'required',
            'img' => 'required',
        ]);

        $image = $request->file('img');
        $image_ex = $image->getClientOriginalExtension();
        $imageNama = now()->format('YmdHis') . '.' . $image_ex;
        $image->storeAs('public/images', $imageNama);

        $data = [
            'nama' => $request->input('nama'),
            'aktivitas' => $request->input('aktivitas'),
            'harga' => $request->input('harga'),
            'durasi' => $request->input('durasi'),
            'img' => $imageNama,
        ];

        destinasi::create($data);

        return redirect()->route('destinasi.index');
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

    public function submit(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'destinasi_id' => 'required|exists:destinasis,id',  // Validasi destinasi_id
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Destinasi::findOrFail($request->destinasi_id);
        Rating::create([
            'nama' => $request->nama,
            'destinasi_id' => $request->destinasi_id,
            'rating' => $request->rating,
        ]);

        return redirect()->route('rate.keren');
    }


    public function edit($id)
    {
        $destinasi = destinasi::findOrFail($id);
        return redirect()->route('destinasi.index', compact('destinasi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'aktivitas' => 'required',
            'harga' => 'required',
            'durasi' => 'required',
            'img' => 'required',
        ]);

        $destinasi = destinasi::findOrFail($id);

        if ($request->hasFile('img')) {
            if (Storage::exists('public/images/' . $destinasi->img)) {
                Storage::delete('public/images/' . $destinasi->img);
            }

            $image = $request->file('img');
            $image_ex = $image->extension();
            $imageNama = date('ymdhis') . "." . $image_ex;
            $image->storeAs('public/images', $imageNama);
        } else {
            $imageNama = $destinasi->img;
        }

        $destinasi->nama = $request->input('nama');
        $destinasi->aktivitas = $request->input('aktivitas');
        $destinasi->harga = $request->input('harga');
        $destinasi->durasi = $request->input('durasi');
        $destinasi->img = $imageNama;
        $destinasi->save();

        return redirect()->route('destinasi.index');
    }

    public function destroy($id)
    {
        destinasi::findOrFail($id)->delete();

        return redirect()->route('destinasi.index');
    }
}
