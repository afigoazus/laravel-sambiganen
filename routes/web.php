<?php

use App\Http\Controllers\BudgetController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\CreationController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OrganizationController;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home & Information Pages
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/profil', 'profile')->name('profil');
    Route::get('/sejarah', [HistoryController::class, 'index'])->name('sejarah');
});

// Static Content Routes
Route::view('/dtks', 'surat-surat.dtks')->name('surat-surat.dtks');

// News Routes
Route::controller(NewsController::class)->prefix('berita')->name('berita')->group(function () {
    Route::get('/', 'index');
    Route::get('/search', 'search')->name('.search');
    Route::get('/{id}', 'get')->name('.get');
});

// Media & Community Routes
Route::get('/galeri', [GalleryController::class, 'index'])->name('galeri');
Route::get('/lembaga', [OrganizationController::class, 'index'])->name('lembaga');

// Creation & Activity Routes
Route::controller(CreationController::class)->group(function () {
    Route::get('/agenda', 'index')->name('agenda');
    Route::get('/kreasi', 'index')->name('kreasi');
});

// Finance Routes
Route::get('/anggaran/{year?}', [BudgetController::class, 'index'])->name('anggaran');

// Complaint Routes
Route::controller(ComplaintController::class)->prefix('pengaduan')->name('pengaduan')->group(function () {
    Route::get('/', 'index');
    Route::post('/', 'store')->name('.store');
});

/*
|--------------------------------------------------------------------------
| Document Routes
|--------------------------------------------------------------------------
*/
Route::prefix('dokumen')->group(function () {
    Route::get('/', [DocumentController::class, 'index'])->name('surat-surat');

    // Document Static Views
    $documentViews = [
        'keterangan-usaha' => 'surat-surat.keterangan_usaha',
        'bbm' => 'surat-surat.bbm',
        'keringanan-sekolah' => 'surat-surat.keringanan_sekolah',
        'perpindahan-penduduk' => 'surat-surat.perpindahan_penduduk',
        'kematian-minimal' => 'surat-surat.kematian_minimal',
        'kematian-nkri' => 'surat-surat.kematian_nkri',
        'kelahiran' => 'surat-surat.kelahiran',
        'kehilangan' => 'surat-surat.kehilangan',
        'tidak-mampu' => 'surat-surat.tidak_mampu',
        'ijin-keramaian'=>'surat-surat.ijin_keramaian',
        'jualbeli-tanah' => 'surat-surat.jualbeli_tanah',
        'keterangan-domisili'=> 'surat-surat.keterangan_domisili',
        'keterangan-usaha' => 'surat-surat.keterangan_usaha',
        'reaktivasi-pbijk' => 'surat-surat.reaktivasi_pbijk',
        'taksiran-harga' => 'surat-surat.taksiran_harga',
    ];

    foreach ($documentViews as $uri => $view) {
        Route::view("/$uri", $view)->name("surat-surat.$uri");
    }

    // Document Store Routes
    $documentStoreRoutes = [
        'keterangan-usaha' => 'storeLetterBusiness',
        'kelahiran' => 'storeBirthNote',
        'kematian-minimal' => 'storeLetterDeath',
        'bbm' => 'storeLetterFuel',
        'kematian-nkri' => 'storeDeathNote',
        'keringanan-sekolah' => 'storeLetterIncapacity',
        'kehilangan' => 'storeLetterLost',
        'perpindahan-penduduk' => 'storeLetterPerpindahan',
        'dtks' => 'storeDTKS',
        'tidak-mampu' =>'Storetidakmampu',
        'ijin-keramaian'=>'storeijinkeramaian',
        'jualbeli-tanah' => 'storejualbelitanah',
        'keterangan-domisili'=> 'storeketerangandomisili',
        'keterangan-usaha' => 'storeketeranganusaha',
        'reaktivasi-pbijk' => 'storereaktivasipbijk',
        'taksiran-harga' => 'storetaksiranharga',

    ];

    foreach ($documentStoreRoutes as $uri => $method) {
        Route::post("/$uri/store", [DocumentController::class, $method])->name("$uri.store");
    }
});

/*
|--------------------------------------------------------------------------
| PDF Download Routes
|--------------------------------------------------------------------------
*/

// testing route
Route::get('/test-pdf', function () {
    $pdf = Pdf::loadView('pdf.combined-death-document');

    return $pdf->download('combined_death_document.pdf');
})->name('test.pdf');

Route::controller(DocumentController::class)->prefix('download')->group(function () {
    // Special Documents
    Route::get('/capil-lahir/{id}', 'downloadBirthNote')->name('capil.lahir');
    Route::get('/capil-kematian/{id}', 'downloadDeathNote')->name('capil.kematian');
    Route::get('/skpwni/{id}', 'downloadSKPWNI')->name('surat.skpwni');

    // Official Letters
    Route::get('/kehilangan/{id}', 'downloadLetterLost')->name('surat.kehilangan');
    Route::get('/usaha/{id}', 'downloadLetterBussiness')->name('surat.usaha');
    Route::get('/kematian/{id}', 'downloadLetterDeath')->name('surat.kematian');
    Route::get('/tidak-mampu/{id}', 'downloadLetterIncapacity')->name('surat.tidakmampu');
    Route::get('/bbm/{id}', 'downloadLetterFuel')->name('surat.bbm');
    Route::get('/izin-keramaian/{id}', 'downloadLetterIncapacity')->name('surat.izin-keramaian');
    Route::get('/jualbeli-tanah/{id}', 'downloadLetterIncapacity')->name('surat.jualbeli-tanah');
    Route::get('/keterangan-domisili/{id}', 'downloadLetterIncapacity')->name('surat.keterangan-domisili');
    Route::get('/keterangan-usaha/{id}', 'downloadLetterIncapacity')->name('surat.keterangan-usaha');
    Route::get('/reaktivasi-pbijk/{id}', 'downloadLetterIncapacity')->name('surat.reaktivasi-pbijk');
    Route::get('/taksiran-harga/{id}', 'downloadLetterIncapacity')->name('surat.taksiran-harga');



    // Special Documents
    Route::get('/dtks/{id}', 'downloadDTKS')->name('surat.dtks');
});
