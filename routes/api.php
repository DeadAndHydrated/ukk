<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BarangController;
use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\BarangMasukController;
use App\Http\Controllers\Api\BarangKeluarController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('barang', BarangController::class);
Route::apiResource('kategori', KategoriController::class);
// Route::post('kategori/{kategori_id}', [KategoriController::class, "updateAPIKategori"]);
// Route::get('kategori/{kategori_id}', [KategoriController::class, "getAPIKategori"]);
Route::apiResource('barangmasuk', BarangMasukController::class);
Route::apiResource('barangkeluar', BarangKeluarController::class);