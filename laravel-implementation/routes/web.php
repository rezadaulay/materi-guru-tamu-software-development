<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;

Route::get('/', [PelangganController::class, 'index'])->name('pelanggan.index');
Route::get('/menu', [PelangganController::class, 'menu'])->name('pelanggan.menu');
Route::post('/menu', [PelangganController::class, 'storePesanan'])->name('pelanggan.store');

Route::get('/review/{id}', [PelangganController::class, 'review'])->name('pelanggan.review');
Route::get('/payment/{id}', [PelangganController::class, 'payment'])->name('pelanggan.payment');
Route::post('/payment/{id}', [PelangganController::class, 'storePayment'])->name('pelanggan.payment.store');

Route::get('/success/{id}', [PelangganController::class, 'success'])->name('pelanggan.success');

Route::get('/status', [PelangganController::class, 'status'])->name('pelanggan.status');
Route::post('/status', [PelangganController::class, 'checkStatus'])->name('pelanggan.status.check');
