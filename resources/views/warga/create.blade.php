<h2>Tambah Warga</h2>

<form action="/warga/store" method="POST">
    @csrf
    <input type="text" name="nama" placeholder="Nama"><br>
    <input type="text" name="nik" placeholder="NIK"><br>
    <input type="text" name="no_kk" placeholder="Nomor KK"><br>
    <select name="jenis_kelamin">
        <option value="">Pilih Jenis Kelalimin</option>
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
    </select><br>
    <textarea name="alamat" rows="10"></textarea><br>
    <input type="submit" name="submit" value="Save"><br>
</form>