<?php

use App\Http\Controllers\PaketController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeknisiController;
use App\Models\Teknisi;
use Illuminate\Support\Facades\Route;

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



// Route::get('getAllPaket', [PaketController::class, 'getAllPaket']);
// Route::get('getPaket/{id}', [PaketController::class, 'getPaket']);
// Route::get('getPaket', [PaketController::class, 'getPaket']);
// Route::get('getAllTeknisi', [TeknisiController::class, 'getAllTeknisi']);
// Route::get('getTeknisi/{id}', [TeknisiController::class, 'getTeknisi']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
