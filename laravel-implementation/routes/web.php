<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\DapurController;
use App\Http\Controllers\WaitressController;

Route::get('/dapur/order', [DapurController::class, 'order']);
Route::get('/dapur/detail-order/{id}', [DapurController::class, 'detailOrder']);
Route::get('/dapur/proses-order/{id}', [DapurController::class, 'prosesOrder']);
Route::get('/dapur/selesai-order/{id}', [DapurController::class, 'selesaiOrder']);

Route::get('/waitress/order', [WaitressController::class, 'order']);
Route::get('/waitress/detail-order/{id}', [WaitressController::class, 'detailOrder']);
Route::get('/waitress/antar-order/{id}', [WaitressController::class, 'antarOrder']);

Route::get('/success/{id}', [PelangganController::class, 'success']);

Route::get('/', [PelangganController::class, 'index'])->name('pelanggan.index');

Route::get('/menu', [PelangganController::class, 'menu']);
Route::post('/pesanan', [PelangganController::class, 'simpanPesanan']);


Route::get('/dapur/total-order', [DapurController::class, 'totalPesanan']);





// Route::get('/menu', [PelangganController::class, 'menu'])->name('pelanggan.menu');
// Route::post('/menu', [PelangganController::class, 'storePesanan'])->name('pelanggan.store');

// Route::get('/review/{id}', [PelangganController::class, 'review'])->name('pelanggan.review');
// Route::get('/payment/{id}', [PelangganController::class, 'payment'])->name('pelanggan.payment');
// Route::post('/payment/{id}', [PelangganController::class, 'storePayment'])->name('pelanggan.payment.store');

// Route::get('/success/{id}', [PelangganController::class, 'success'])->name('pelanggan.success');

// Route::get('/status', [PelangganController::class, 'status'])->name('pelanggan.status');
// Route::post('/status', [PelangganController::class, 'checkStatus'])->name('pelanggan.status.check');
