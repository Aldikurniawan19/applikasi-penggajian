<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        // Mock Data Laporan Gaji
        // Di aplikasi nyata, ini hasil join tabel karyawan + jabatan + kehadiran + gaji
        $laporan = [
            (object)[
                'id' => 1,
                'nama_karyawan' => 'Ahmad Fauzi',
                'jabatan' => 'Manager Toko',
                'gaji_pokok' => 7000000,
                'potongan' => 50000, // Misal terlambat 1x
                'total_gaji' => 6950000 + 500000 // Gaji - Potongan + Bonus (misal)
            ],
            (object)[
                'id' => 2,
                'nama_karyawan' => 'Siti Aminah',
                'jabatan' => 'Kasir',
                'gaji_pokok' => 3500000,
                'potongan' => 0,
                'total_gaji' => 3500000 + 250000
            ],
            (object)[
                'id' => 3,
                'nama_karyawan' => 'Rudi Hartono',
                'jabatan' => 'Staff Gudang',
                'gaji_pokok' => 3200000,
                'potongan' => 25000,
                'total_gaji' => 3175000
            ],
        ];

        return view('laporan.index', compact('laporan'));
    }
}
