@extends('template')

@section('content')
    <h3>Data Mobil</h3>

    <a href="/mobil/tambah" class="btn btn-info"> + Tambah Mobil Baru</a>

    <form action="/mobil/cari" method="GET" class="form-inline">
        <label class="form-label">Cari Data Mobil :</label>
        <input type="text" name="cari" placeholder="Cari Merk Mobil .." class="form-control">
        <input type="submit" value="CARI" class="btn btn-primary">
    </form>
    <br />

    <table class="table table-striped">
        <tr>
            <th>Merk</th>
            <th>Harga</th>
            <th>Tersedia</th>
            <th>Berat (ton)</th>
            <th>Opsi</th>
        </tr>
        @foreach ($mobil as $m)
            <tr>
                <td>{{ $m->merkmobil }}</td>
                <td>{{ $m->hargamobil }}</td>
                <td>{{ $m->tersedia == 1 ? 'Ya' : 'Tidak' }}</td>
                <td>{{ $m->berat }}</td>
                <td>
                    <a href="/mobil/edit/{{ $m->ID }}" class="btn btn-success">Edit</a>
                    <a href="/mobil/hapus/{{ $m->ID }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $mobil->links() }}
@endsection
