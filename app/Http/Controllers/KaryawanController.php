<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karyawan = [
            (object)[
                'id' => 1,
                'nama' => 'Ahmad Fauzi',
                'jenis_kelamin' => 'Laki-laki',
                'tgl_lahir' => '1995-08-17',
                'no_tlpn' => '081234567890',
                'alamat' => 'Jl. Mawar No. 12, Depok'
            ],
            (object)[
                'id' => 2,
                'nama' => 'Siti Aminah',
                'jenis_kelamin' => 'Perempuan',
                'tgl_lahir' => '1998-02-20',
                'no_tlpn' => '085678901234',
                'alamat' => 'Jl. Melati Indah Blok C1'
            ],
            (object)[
                'id' => 3,
                'nama' => 'Rudi Hartono',
                'jenis_kelamin' => 'Laki-laki',
                'tgl_lahir' => '1990-11-05',
                'no_tlpn' => '081345678901',
                'alamat' => 'Gg. Kancil, RT 02/RW 05'
            ],
        ];

        return view('karyawan.index', compact('karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('karyawan.create');
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
