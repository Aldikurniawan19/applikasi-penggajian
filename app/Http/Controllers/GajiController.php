<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GajiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mock Data Gaji sesuai Wireframe
        $gaji = [
            (object)[
                'id' => 1,
                'nama_karyawan' => 'Ahmad Fauzi',
                'bonus' => 500000,
                'tanggal' => '2023-10-25',
            ],
            (object)[
                'id' => 2,
                'nama_karyawan' => 'Siti Aminah',
                'bonus' => 250000,
                'tanggal' => '2023-10-25',
            ],
            (object)[
                'id' => 3,
                'nama_karyawan' => 'Rudi Hartono',
                'bonus' => 0, // Tidak ada bonus
                'tanggal' => '2023-10-26',
            ],
        ];

        return view('gaji.index', compact('gaji'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gaji.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
