<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/anggaran', function () {
    return view('budget');
});
Route::get('/pengaduan', function () {
    return view('complaint');
});
Route::get('/dokumen', function () {
    return view('docs');
});
Route::get('/galeri', function () {
    return view('galery');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/lembaga', function () {
    return view('organization');
});
Route::get('/profil', function () {
    return view('profile');
});
