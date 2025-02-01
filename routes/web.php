<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\dodaj_controller;
use App\Http\Controllers\usun_controller;
use App\Http\Controllers\wyswietl_controller;
use App\Http\Controllers\zaktualizuj_controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dodaj', function () {
    return view('dodaj');
})->middleware(['auth', 'verified'])->name('dodaj');

Route::post('/dodaj', [dodaj_controller::class, 'add'])->name('dodaj.add');

Route::get('/usun', function () {
    return view('usun');
})->middleware(['auth', 'verified'])->name('usun');

Route::delete('/usun', [usun_controller::class, 'usun'])->name('usun.usun');

Route::get('/wyswietl', [wyswietl_controller::class, 'index'])->middleware(['auth', 'verified'])->name('wyswietl.index');
Route::get('/zaktualizuj', function () {
    return view('zaktualizuj');
 })->middleware(['auth', 'verified'])->name('zaktualizuj');
 
Route::get('/zaktualizuj', [zaktualizuj_controller::class, 'edit'])->middleware(['auth', 'verified'])->name('zaktualizuj.edit');
Route::patch('/zaktualizuj', [zaktualizuj_controller::class, 'update'])->middleware(['auth', 'verified'])->name('zaktualizuj.update');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


