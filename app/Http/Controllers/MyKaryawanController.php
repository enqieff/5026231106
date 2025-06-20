<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyKaryawanController extends Controller
{
    public function index()
    {
    	// mengambil data dari table karyawan
    	$karyawan = DB::table('mykaryawan')->get() ;
    	// mengirim data karyawan ke view index
    	return view('indexmykaryawan',['karyawan' => $karyawan]);
    }

    // update data karyawan
    public function update(Request $request)
    {
	    // update data karyawan
	    DB::table('mykaryawan')
        ->where('kodepegawai',$request->id)
        ->update([
		    'kodepegawai' => $request->kodepegawai,
		    'namalengkap' => $request->namalengkap,
		    'divisi' => $request->divisi,
		    'departemen' => $request->departemen
	    ]);

	    // alihkan halaman ke halaman karyawan
	    return redirect('/eas');
    }

    public function store(Request $request)
    {
	    // insert data ke table karyawan
	    DB::table('mykaryawan')->insert([
		'kodepegawai' => $request->kodepegawai,
		'namalengkap' => $request->namalengkap,
		'divisi' => $request->divisi,
		'departemen' => $request->departemen
	    ]);

	    // alihkan halaman ke halaman karyawan
	    return redirect('/eas');
    }

    // method untuk edit data karyawan
    public function edit($id)
    {
	    // mengambil data karyawan berdasarkan id yang dipilih
	    $karyawan = DB::table('mykaryawan')
        ->where('kodepegawai',$id) // khusus tanda =
        ->get();
	    // passing data karyawan yang didapat ke view edit.blade.php
	    return view('editmykaryawan',['karyawan' => $karyawan]);
    }

    // method untuk view data karyawan
    public function view($id)
    {
	    // mengambil data karyawan berdasarkan id yang dipilih
	    $karyawan = DB::table('mykaryawan')
        ->where('kodepegawai',$id) // khusus tanda =
        ->get();
	    // passing data karyawan yang didapat ke view edit.blade.php
	    return view('viewmykaryawan',['karyawan' => $karyawan]);
    }
}

