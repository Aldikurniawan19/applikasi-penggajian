<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use Illuminate\Http\Request;
use Carbon\Carbon;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        $periode = $request->input('periode', date('Y-m'));

        $parts = explode('-', $periode);
        $tahun = $parts[0];
        $bulan = $parts[1];

        $laporan = Gaji::join('karyawans', 'gajis.karyawan_id', '=', 'karyawans.id')
            ->whereMonth('gajis.tanggal', $bulan)
            ->whereYear('gajis.tanggal', $tahun)
            ->select(
                'gajis.*',
                'karyawans.nama as nama_karyawan',
                'karyawans.jabatan as jabatan'
            )
            ->latest('gajis.tanggal')
            ->get();

        return view('laporan.index', compact('laporan', 'periode'));
    }
}
