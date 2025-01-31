<?php

use App\Http\Controllers\BudgetController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OrganizationController;
use Illuminate\Support\Facades\Route;

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