<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'tgl_lahir',
        'no_tlpn',
        'alamat',
    ];

    // Relasi: Karyawan punya banyak riwayat Gaji
    public function gajis()
    {
        return $this->hasMany(Gaji::class);
    }
}
