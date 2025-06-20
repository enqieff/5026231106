@extends('template')

@section('content')
    <h3>Data Karyawan</h3>

    <table class="table table-striped">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Opsi</th>
        </tr>
        @foreach ($karyawan as $p)
            <tr>
                <td>{{ $p->kodepegawai }}</td>
                <td>{{ $p->namalengkap }}</td>
                <td>{{ $p->divisi }}</td>
                <td>{{ $p->departemen }}</td>
                <td>
                    <a href="/eas/edit/{{ $p->kodepegawai }}" class="btn btn-success">Edit</a>
                    <a href="/eas/view/{{ $p->kodepegawai }}" class="btn btn-success">View</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
