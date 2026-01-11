<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KehadiranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mock Data Absensi
        $kehadiran = [
            (object)[
                'id' => 1,
                'nama' => 'Ahmad Fauzi',
                'jam_masuk' => '07:55:00',
                'jam_keluar' => '17:05:00',
                'tanggal' => '2023-10-25'
            ],
            (object)[
                'id' => 2,
                'nama' => 'Siti Aminah',
                'jam_masuk' => '08:00:00',
                'jam_keluar' => '17:00:00',
                'tanggal' => '2023-10-25'
            ],
            (object)[
                'id' => 3,
                'nama' => 'Rudi Hartono',
                'jam_masuk' => '08:15:00', // Telat
                'jam_keluar' => '17:10:00',
                'tanggal' => '2023-10-25'
            ],
        ];

        return view('kehadiran.index', compact('kehadiran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kehadiran.create');
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
