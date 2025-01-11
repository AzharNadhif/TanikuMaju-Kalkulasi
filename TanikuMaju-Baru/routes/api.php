<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DataCountController;
use App\Http\Controllers\PetaniController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DiskusiController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\TokenCheckController;
use App\Models\Crop;
use App\Models\Diskusi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KalkulasiController;






/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/





Route::middleware('auth:sanctum')->group(function () {

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::patch('/petani/update', [PetaniController::class, 'update'])->name('update');
    Route::get('/petani/profil',[PetaniController::class, 'getPetaniById'])->name('getPetaniById');

    Route::post('/chat', [ChatController::class, 'store']); // Untuk menambahkan chat
    Route::post('/chat/{id_diskusi}', [ChatController::class, 'getByDiskusi']); // Untuk mengambil chat berdasarkan id_diskusi


    Route::get('/riwayat/user', [KalkulasiController::class, 'riwayat'])->name('riwayat');
    
    // DELETE KALKULASI
    Route::delete('/delete-crop/{id}', [KalkulasiController::class, 'delete'])->name('delete-crop');

    //ROUTE POST DB KALKULASI
    Route::post('/save-crop', [KalkulasiController::class, 'store'])->name('save-crop');

    });

Route::middleware('web')->group(function () {

    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::get('/check-token', [AuthController::class, 'checkTokenExpired']);
    
    
    
    Route::get('/artikel', [ArtikelController::class, 'index']);
    Route::post('/artikel', [ArtikelController::class, 'store']);
    Route::get('/artikel/{id}', [ArtikelController::class, 'show']);
    Route::put('/artikel/{id}', [ArtikelController::class, 'update']);
    Route::delete('/artikel/{id}', [ArtikelController::class, 'destroy']);
    
    
    Route::get('/diskusi', [DiskusiController::class, 'index']);
    Route::post('/diskusi', [DiskusiController::class, 'store']);
    Route::get('/diskusi/{id}', [DiskusiController::class, 'show']);
    Route::put('/diskusi/{id}', [DiskusiController::class, 'update']);
    Route::delete('/diskusi/{id}', [DiskusiController::class, 'destroy']);
});

