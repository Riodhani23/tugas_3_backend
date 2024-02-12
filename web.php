<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MahasantriController;

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
    return view('welcome');
});

// Route salam
Route::get('/salam', function () {
    return "Assalamu'alaikum Sobat, Selamat Belajar Laravel";
    });

// Routing dengan parameter
Route::get('/pegawai/{nama}/{divisi}',function ($nama,$divisi){
return 'Nama Pegawai : '.$nama.'<br/>Departemen : '.$divisi;
});

// Menambahkan Route /Kabar
Route::get('/kabar', function () {
    return view('kondisi');
    });

// Route Data Mahasiswa
// versi 1
// Route::get('mahasiswa','App\Http\Controllers\MahasiswaController@dataMahasiswa');

// versi 2
Route::get('/mahasiswa',[MahasiswaController::class, 'dataMahasiswa']);

// pertemuan 4 
// menambahkan view hello
Route::get('/hello', function () {
    return view('/p4/hello', ['name' => 'Inaya']);
 });

// menambahkan Route nilai
Route::get('/nilai', function () {
    return view('/p4/nilai');
 });

// menambahkan daftar nilai
Route::get('/daftarnilai', function () {
    return view('/p4/daftar_nilai');
    });

// membuat tamplate
Route::get('/phpframework', function ()
    { return view('/p4/layouts.index');
});

Route::get('/mahasantri',[MahasantriController::class, 'dataMahasantri']);
