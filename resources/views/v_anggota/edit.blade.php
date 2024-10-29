<h3>{{ $judul }}</h3>
<form action="{{ route('anggota.update', $edit->id) }}" method="POST">
    @method('put')
    @csrf

    <label>Nama</label>
    <input type="text" name="nama" id="" value="{{ old('nama', $edit->nama) }}"
        placeholder="Masukkan Nama Lengkap">
    <p></p>

    <label>HP</label>
    <input type="text" name="hp" id="" value="{{ old('hp', $edit->hp) }}" placeholder="Masukkan Nomor hp">
    <p></p>

    <button type="submit">Perbaharui</button>
    <a href="{{ route('anggota.index') }}">
        <button type="button">Batal</button>
    </a>
</form>
