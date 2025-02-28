<?php

use App\Http\Controllers\BudgetController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\CreationController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OrganizationController;
use Illuminate\Support\Facades\Route;

// Home Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profil', [HomeController::class, 'profile'])->name('profil');
Route::get('/sejarah', [HomeController::class, 'history'])->name('sejarah');

Route::get('/dtks', function () {
    return view('surat-surat.dtks');
});

// Feature Routes
Route::get('/agenda', [CreationController::class, 'index'])->name('agenda');
Route::get('/galeri', [GalleryController::class, 'index'])->name('galeri');
Route::get('/berita', [NewsController::class, 'index'])->name('berita');
Route::get('/berita/{id}', [NewsController::class, 'get'])->name('berita.get');
Route::get('/lembaga', [OrganizationController::class, 'index'])->name('lembaga');
Route::get('/kreasi', [CreationController::class, 'index'])->name('kreasi');
Route::get('/anggaran/{year?}', [BudgetController::class, 'index'])->name('anggaran');
Route::get('/pengaduan', [ComplaintController::class, 'index'])->name('pengaduan');

// Document Routes
Route::prefix('dokumen')->group(function () {
    Route::get('/', [DocumentController::class, 'index'])->name('surat-surat');

    // Static Views
    $views = [
        'keterangan-usaha' => 'surat-surat.keterangan_usaha',
        'bbm' => 'surat-surat.bbm',
        'keringanan-sekolah' => 'surat-surat.keringanan_sekolah',
        'perpindahan-penduduk' => 'surat-surat.perpindahan_penduduk',
        'kematian-minimal' => 'surat-surat.kematian_minimal',
        'kematian-nkri' => 'surat-surat.kematian_nkri',
        'kelahiran' => 'surat-surat.kelahiran',
        'kehilangan' => 'surat-surat.kehilangan',
    ];

    foreach ($views as $uri => $view) {
        Route::view("/$uri", $view)->name("surat-surat.$uri");
    }

    // Store routes
    $storeRoutes = [
        'keterangan-usaha' => 'storeLetterBusiness',
        'kelahiran' => 'storeBirthNote',
        'kematian-minimal' => 'storeLetterDeath',
        'bbm' => 'storeLetterFuel',
        'kematian-nkri' => 'storeDeathNote',
        'keringanan-sekolah' => 'storeLetterIncapacity',
        'kehilangan' => 'storeLetterLost',
    ];

    foreach ($storeRoutes as $uri => $method) {
        Route::post("/$uri/store", [DocumentController::class, $method])->name("$uri.store");
    }
});

// Pdf Download Routes
Route::prefix('download')->group(function () {
    Route::get('/kehilangan/{id}', [DocumentController::class, 'downloadLetterLost'])->name('surat.kehilangan');
    Route::get('/capil-lahir/{id}', [DocumentController::class, 'downloadBirthNote'])->name('capil.lahir');
    Route::get('/kehilangan/{id}', [DocumentController::class, 'downloadLetterLost'])->name('surat.kehilangan');
    Route::get('/capil-lahir/{id}', [DocumentController::class, 'downloadBirthNote'])->name('capil.lahir');
    Route::get('/capil-kematian/{id}', [DocumentController::class, 'downloadDeathNote'])->name('capil.kematian');
    Route::get('/usaha/{id}', [DocumentController::class, 'downloadLetterBussiness'])->name('surat.usaha');
    Route::get('/kematian/{id}', [DocumentController::class, 'downloadLetterDeath'])->name('surat.kematian');
    Route::get('/tidak-mampu/{id}', [DocumentController::class, 'downloadLetterIncapacity'])->name('surat.tidakmampu');
    Route::get('/bbm/{id}', [DocumentController::class, 'downloadLetterFuel'])->name('surat.bbm');
    Route::get('/dtks/{id}', [DocumentController::class, 'downloadDTKS'])->name('surat.dtks');
});
