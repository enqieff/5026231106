<!DOCTYPE html>
<html>

<head>
    <title>Edit Data Mobil - www.malasngoding.com</title>
</head>

<body>

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Edit Mobil</h3>

    <a href="/mobil"> Kembali</a>

    <br />
    <br />

    @foreach ($mobil as $m)
        <form action="/mobil/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $m->ID }}"> <br />
            Merk Mobil <input type="text" required="required" name="merkmobil" value="{{ $m->merkmobil }}"> <br />
            Harga Mobil <input type="number" required="required" name="hargamobil" value="{{ $m->hargamobil }}"> <br />
            Tersedia
            <select name="tersedia" required>
                <option value="1" {{ $m->tersedia == 1 ? 'selected' : '' }}>Ya</option>
                <option value="0" {{ $m->tersedia == 0 ? 'selected' : '' }}>Tidak</option>
            </select> <br />
            Berat (kg) <input type="number" required="required" name="berat" value="{{ $m->berat }}"> <br />
            <input type="submit" value="Simpan Data">
        </form>
    @endforeach

</body>

</html>
