<?php

use Illuminate\Support\Facades\Route;
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

