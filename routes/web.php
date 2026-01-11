<?php

use App\Http\Controllers\GajiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KehadiranController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/presensi', function () {
    return view('auth.presensi');
})->name('presensi');

Route::get('/slip-gaji', function () {
    return view('auth.slip-gaji');
})->name('slip-gaji');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/data-master', function () {
        return view('data-master.index');
    })->name('data-master.index');
    Route::resource('users', UserController::class);
    Route::resource('karyawan', KaryawanController::class);
    Route::resource('jabatan', JabatanController::class);
    Route::resource('kehadiran', KehadiranController::class);
    Route::resource('gaji', GajiController::class);
    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
});

require __DIR__ . '/auth.php';
