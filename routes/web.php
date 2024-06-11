<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class,'authenticate']);
Route::post('logout', [LoginController::class,'logout']);
Route::get('logout',[LoginController::class, 'logout'])->name('logout');
Route::post('register', [RegisterController::class,'register']);
Route::get('register', [RegisterController::class,'redirect']);

//Route::resource('/products', \App\Http\Controllers\ProductController::class);
// Route::resource('/barang', \App\Http\Controllers\BarangController::class);
// Route::resource('/kategori', \App\Http\Controllers\KategoriController::class);
// Route::resource('/barangmasuk', \App\Http\Controllers\BarangMasukController::class);
// Route::resource('/barangkeluar', \App\Http\Controllers\BarangKeluarController::class);

Route::resource('barang', BarangController::class)->middleware('auth');
Route::resource('kategori', KategoriController::class)->middleware('auth');
Route::resource('barang', BarangController::class)->middleware('auth');
Route::resource('barangmasuk', BarangMasukController::class)->middleware('auth');
Route::resource('barangkeluar', BarangKeluarController::class)->middleware('auth');


//Route::get('/barangmasuk', \App\Http\Controllers\BarangMasukController::class, 'index');