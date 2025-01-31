<?php

use App\Http\Controllers\BudgetController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OrganizationController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

// Home Routes
Route::get('/', [HomeController::class, 'index']);
Route::get('/profil', [HomeController::class, 'profile']);
Route::get('/sejarah', [HomeController::class, 'history']);
Route::get('/agenda', [HomeController::class, 'agenda']);

// Budget Routes
Route::get('/anggaran', [BudgetController::class, 'index']);

// Complaint Routes
Route::get('/pengaduan', [ComplaintController::class, 'index']);

// Document Routes
Route::get('/dokumen', [DocumentController::class, 'index']);
Route::get('/kehilangan/{id}', [DocumentController::class, 'downloadLetterLost'])->name('surat.kehilangan');
Route::get('/capil-lahir/{id}', [DocumentController::class, 'downloadBirthNote'])->name('capil.lahir');
Route::get('/capil-kematian/{id}', [DocumentController::class, 'downloadDeathNote'])->name('capil.kematian');
Route::get('/usaha/{id}', [DocumentController::class, 'downloadLetterBussiness'])->name('surat.usaha');
Route::get('/kematian/{id}', [DocumentController::class, 'downloadLetterDeath'])->name('surat.kematian');
Route::get('/tidak-mampu/{id}', [DocumentController::class, 'downloadLetterIncapacity'])->name('surat.tidakmampu');
Route::get('/bbm/{id}', [DocumentController::class, 'downloadLetterFuel'])->name('surat.bbm');

// Gallery Routes
Route::get('/galeri', [GalleryController::class, 'index']);

// News Routes
Route::get('/berita', [NewsController::class, 'index']);

// Organization Routes
Route::get('/lembaga', [OrganizationController::class, 'index']);

Route::get('/dokumen/keterangan-usaha', function () {
    return view('surat-surat.keterangan_usaha');
});

Route::get('/dokumen/bbm', function () {
    return view('surat-surat.bbm');
});

Route::get('/dokumen/keringanan-sekolah', function () {
    return view('surat-surat.keringanan_sekolah');
});

Route::get('/dokumen/perpindahan-penduduk', function () {
    return view('surat-surat.perpindahan_penduduk');
});