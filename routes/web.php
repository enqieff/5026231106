<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KeranjangDBController;
use App\Http\Controllers\MyKaryawanController;

// import java.io ;

// System.out.println
// Route::get('published URL',function controller)
Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('frontend', function () {
	return view('frontend');
});

Route::get('satu', function () {
	return view('pertama');
});

Route::get('dua', function () {
	return view('bootstrap1');
});

Route::get('tiga', function () {
	return view('flex-cont');
});

Route::get('empat', function () {
	return view('inline-block');
});

Route::get('lima', function () {
	return view('inline-block2');
});

Route::get('enam', function () {
	return view('js1');
});

Route::get('tujuh', function () {
	return view('kodesoal4');
});

Route::get('delapan', function () {
	return view('linktree');
});

Route::get('sembilan', function () {
	return view('punyaorang');
});

Route::get('sepuluh', function () {
	return view('validasi1');
});

Route::get('sebelas', function () {
	return view('index');
});

Route::get('dosen',[DosenController::class, 'index']);
Route::get('welcome',[DosenController::class, 'welcome']);

//Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//route pegawaiDB
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);

Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

//route mobil
Route::get('/mobil', [MobilController::class, 'index']);
Route::get('/mobil/tambah', [MobilController::class, 'tambah']);
Route::post('/mobil/store', [MobilController::class, 'store']);
Route::get('/mobil/edit/{id}', [MobilController::class, 'edit']);
Route::post('/mobil/update', [MobilController::class, 'update']);
Route::get('/mobil/hapus/{id}', [MobilController::class, 'hapus']);
Route::get('/mobil/cari', [MobilController::class, 'cari']);

Route::get('/pagecounter', [CounterController::class, 'index']);

//route Karyawan
Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah']);
Route::post('/karyawan/store', [KaryawanController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::post('/karyawan/update',[KaryawanController::class, 'update']);
Route::get('/karyawan/hapus/{id}', [KaryawanController::class, 'hapus']);

//Route keranjangbelanja
//Route tampilkan dan beli
Route::get('/keranjang', [KeranjangDBController:: class, 'index']);
Route::get('/keranjang/beli', [KeranjangDBController:: class, 'beli']);
//store dan batal
Route::post('/keranjang/store', [KeranjangDBController:: class, 'store']);
Route::get('/keranjang/batal/{ID}', [KeranjangDBController:: class, 'batal']);

//route EAS
Route::get('/eas', [MyKaryawanController::class, 'index']);
Route::post('/eas/store', [MyKaryawanController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::post('/eas/update',[MyKaryawanController::class, 'update']);
Route::get('/eas/edit/{id}', [MyKaryawanController::class, 'edit']);
Route::post('/eas/view',[MyKaryawanController::class, 'view']);
