<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class GajiController extends Controller
{
    public function index()
    {
        $gaji = Gaji::with('karyawan')->latest()->get();
        return view('gaji.index', compact('gaji'));
    }

    public function create()
    {
        $karyawan = Karyawan::all();
        return view('gaji.create', compact('karyawan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'karyawan_id' => 'required|exists:karyawans,id',
            'gaji_pokok' => 'required|numeric|min:0',
            'bonus' => 'required|numeric|min:0',
            'potongan' => 'required|numeric|min:0',
            'tanggal' => 'required|date',
        ]);

        $total = $request->gaji_pokok + $request->bonus - $request->potongan;

        Gaji::create([
            'karyawan_id' => $request->karyawan_id,
            'gaji_pokok' => $request->gaji_pokok,
            'bonus' => $request->bonus,
            'potongan' => $request->potongan,
            'total_gaji' => $total,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('gaji.index')->with('success', 'Data gaji berhasil disimpan!');
    }

    public function edit(Gaji $gaji)
    {
        $karyawan = Karyawan::all();
        return view('gaji.edit', compact('gaji', 'karyawan'));
    }

    public function update(Request $request, Gaji $gaji)
    {
        $request->validate([
            'karyawan_id' => 'required|exists:karyawans,id',
            'gaji_pokok' => 'required|numeric|min:0',
            'bonus' => 'required|numeric|min:0',
            'potongan' => 'required|numeric|min:0',
            'tanggal' => 'required|date',
        ]);

        $total = $request->gaji_pokok + $request->bonus - $request->potongan;

        $gaji->update([
            'karyawan_id' => $request->karyawan_id,
            'gaji_pokok' => $request->gaji_pokok,
            'bonus' => $request->bonus,
            'potongan' => $request->potongan,
            'total_gaji' => $total,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('gaji.index')->with('success', 'Data gaji berhasil diperbarui!');
    }

    public function destroy(Gaji $gaji)
    {
        $gaji->delete();
        return redirect()->route('gaji.index')->with('success', 'Data gaji berhasil dihapus!');
    }
}
