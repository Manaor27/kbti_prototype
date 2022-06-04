<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/regis', function () {
    return view('regis');
});

Route::get('/kelas', function () {
    return view('kelas');
});

Route::get('/dosen', function () {
    return view('dosen');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/matakuliah', function () {
    return view('matakuliah');
});

Route::get('/cetak_invoice', [InvoiceController::class, 'cetak_pdf']);

Route::get('/invoice', function () {
    return view('invoice');
});