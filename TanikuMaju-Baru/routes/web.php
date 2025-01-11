<?php

use App\Models\Crop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KalkulasiController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
if (! function_exists('utama'))
{
    function utama($view) {
        return view("utama.$view");
    }
}

Route::get('/', function () {
    return utama('index');
});

Route::get('/login', function () {
    return redirect('/');
});

Route::get('/registrasi', function () {
    return utama('register');
});

Route::get('/beranda', function () {
    return utama('homepage');
});

// kalkulasi
Route::get('/kalkulasi', function () {
    return view('utama.kalkulasi');
})->name('kalkulasi');

Route::get('/artikel', function () {
    return utama('artikel.index');
});

Route::get('/artikel/detail', function () {
    return utama('artikel.show');
});

Route::get('/diskusi', function () {
    return utama('diskusi.index');
});

Route::get('/diskusi/chat/{id}', function () {
    return utama('diskusi.show');
});

Route::get('/profil', function () {
    return utama('profil');
});




