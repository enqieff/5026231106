<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MobilController extends Controller
{
    // Menampilkan daftar mobil
    public function index()
    {
        $mobil = DB::table('mobil')->paginate(10);
        return view('indexmobil', ['mobil' => $mobil]);
    }

    // Menampilkan form tambah mobil
    public function tambah()
    {
        return view('tambahmobil');
    }

    // Menyimpan data mobil baru
    public function store(Request $request)
    {
        DB::table('mobil')->insert([
            'merkmobil' => $request->merkmobil,
            'hargamobil' => $request->hargamobil,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        return redirect('/mobil');
    }

    // Menampilkan form edit mobil
    public function edit($id)
    {
        $mobil = DB::table('mobil')->where('id', $id)->get();
        return view('editmobil', ['mobil' => $mobil]);
    }

    // Menyimpan update data mobil
    public function update(Request $request)
    {
        DB::table('mobil')->where('id', $request->id)->update([
            'merkmobil' => $request->merkmobil,
            'hargamobil' => $request->hargamobil,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        return redirect('/mobil');
    }

    // Menghapus data mobil
    public function hapus($id)
    {
        DB::table('mobil')->where('id', $id)->delete();
        return redirect('/mobil');
    }

    // Mencari data mobil berdasarkan merk
    public function cari(Request $request)
    {
        $cari = $request->cari;

        $mobil = DB::table('mobil')
            ->where('merkmobil', 'like', "%" . $cari . "%")
            ->paginate();

        return view('indexmobil', ['mobil' => $mobil]);
    }
}
