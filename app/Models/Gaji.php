<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    protected $fillable = [
        'karyawan_id',
        'gaji_pokok',
        'bonus',
        'potongan',
        'total_gaji',
        'tanggal',
    ];

    // Relasi: Setiap Gaji dimiliki 1 Karyawan
    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class);
    }
}
