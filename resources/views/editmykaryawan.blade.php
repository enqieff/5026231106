<!DOCTYPE html>
<html>

<body>

    <h3>Edit Karyawan</h3>

    <a href="/eas"> Kembali</a>

    <br />
    <br />

    @foreach ($karyawan as $p)
        <form action="/eas/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->kodepegawai }}"> <br />
            Kode Pegawai <input type="text" required="required" name="kode pegawai" value="{{ $p->kodepegawai }}"> <br />
            Nama Lengkap <input type="text" required="required" name="nama lengkap" value="{{ $p->namalengkap }}"> <br />
            Divisi <input type="text" required="required" name="divisi" value="{{ $p->divisi }}"> <br />
            Departemen <input type="TEXT" required="required" name="departemen" value="{{ $p->departemen }}"> <br />
            <input type="submit" value="Simpan Perubahan">
        </form>
    @endforeach
</body>

</html>
