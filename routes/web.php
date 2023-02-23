<?php

use App\Models\Toko;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/barang', function () {
    return view('daftarbarang', [
        'data_barang' => Toko::all()
    ]);
});

Route::get('/harga', function () {
    return view('daftarharga', [
        'data_barang' => Toko::all()
    ]);
});
