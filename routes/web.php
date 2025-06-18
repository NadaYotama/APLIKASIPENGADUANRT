<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AntrianController;
use App\Http\Controllers\PengajuanSuratController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

// Admin/Petugas
Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function() {
        Route::get('/', 'DashboardController@index')->name('dashboard');

        Route::resource('pengaduans', 'PengaduanController');

        Route::resource('tanggapan', 'TanggapanController');

        Route::get('masyarakat', 'AdminController@masyarakat');
        Route::resource('petugas', 'PetugasController');

        Route::get('laporan', 'AdminController@laporan');
        Route::get('laporan/cetak', 'AdminController@cetak');
        Route::get('pengaduan/cetak/{id}', 'AdminController@pdf');
// Route to show the antrian index (list)
Route::get('admin/antrian', [AdminController::class, 'antrian'])->name('admin.antrian');

// Route to show a specific antrian based on the ID
Route::get('admin/antrian/{id}', [AdminController::class, 'antrian'])->name('admin.antrian.lihat');
});


// Masyarakat
Route::prefix('user')
    ->middleware(['auth', 'MasyarakatMiddleware'])
    ->group(function() {
		Route::get('/', 'MasyarakatController@index')->name('masyarakat-dashboard');
        Route::resource('pengaduan', 'MasyarakatController');
        Route::get('pengaduan', 'MasyarakatController@lihat');
});




Route::middleware(['auth'])->group(function () {
    Route::prefix('antrian')->group(function () {
        Route::get('/', [AntrianController::class, 'index'])->name('antrian.index');
        Route::get('/buat', [AntrianController::class, 'buat'])->name('antrian.buat');
        Route::post('/simpan', [AntrianController::class, 'simpan'])->name('antrian.simpan');
        Route::get('/{antrian}', [AntrianController::class, 'lihat'])->name('antrian.lihat');
        Route::delete('/antrian/{id}', [AntrianController::class, 'hapus'])->name('antrian.hapus');
        
    });

    // Pengajuan Surat
    Route::prefix('pengajuan-surat')->group(function () {
        Route::get('/', [PengajuanSuratController::class, 'index'])->name('pengajuan-surat.index');
        Route::get('/buat', [PengajuanSuratController::class, 'buat'])->name('pengajuan-surat.buat');
        Route::post('/simpan', [PengajuanSuratController::class, 'simpan'])->name('pengajuan-surat.simpan');
        Route::get('/{pengajuanSurat}', [PengajuanSuratController::class, 'lihat'])->name('pengajuan-surat.lihat');
        // routes/web.php
        Route::delete('/pengajuan-surat/{id}', [PengajuanSuratController::class, 'hapus'])->name('pengajuan-surat.hapus');
    });
});

    require __DIR__.'/auth.php';