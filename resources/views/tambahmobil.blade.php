@extends('template')

@section('content')
    <h3>Data Mobil</h3>

    <a href="/mobil"> Kembali</a>

    <br />
    <br />
    <form action="/mobil/store" method="post">
        {{ csrf_field() }}
        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Merk Mobil</label>
            </div>
            <div class="col-6">
                 <input type="text" name="merkmobil" required="required" class="form-control">
            </div>
        </div>
        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Harga Mobil</label>
            </div>
            <div class="col-6">
                 <input type="number" name="hargamobil" required="required" class="form-control">
            </div>
        </div>
        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Tersedia</label>
            </div>
            <div class="col-6">
                <select name="tersedia" required class="form-control">
                    <option value="1">Ya</option>
                    <option value="0">Tidak</option>
                </select>
            </div>
        </div>
        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Berat (ton)</label>
            </div>
            <div class="col-6">
                 <input type="number" name="berat" required="required" class="form-control">
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
@endsection
