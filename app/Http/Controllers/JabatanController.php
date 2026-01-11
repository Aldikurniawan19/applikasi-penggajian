<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Data Mockup sesuai Wireframe
        $jabatan = [
            (object)[
                'id' => 1,
                'nama_jabatan' => 'Manager Toko',
                'gaji_jabatan' => 7000000,
                'upah_lembur' => 50000,
                'tunjangan' => 1000000,
                'potongan_terlambat' => 50000
            ],
            (object)[
                'id' => 2,
                'nama_jabatan' => 'Kasir',
                'gaji_jabatan' => 3500000,
                'upah_lembur' => 30000,
                'tunjangan' => 500000,
                'potongan_terlambat' => 25000
            ],
            (object)[
                'id' => 3,
                'nama_jabatan' => 'Staff Gudang',
                'gaji_jabatan' => 3200000,
                'upah_lembur' => 30000,
                'tunjangan' => 400000,
                'potongan_terlambat' => 25000
            ],
            (object)[
                'id' => 4,
                'nama_jabatan' => 'Driver',
                'gaji_jabatan' => 3000000,
                'upah_lembur' => 40000,
                'tunjangan' => 300000,
                'potongan_terlambat' => 20000
            ],
        ];

        return view('jabatan.index', compact('jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jabatan.create');
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
