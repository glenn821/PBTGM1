<a href="warga/create">Tambah Warga</a>
<table border="1">
    <tr>
        <td>Id</td>
        <td>Nama</td>
        <td>NIK</td>
        <td>No. KK</td>
        <td>Jenis Kelamin</td>
        <td>Alamat</td>
        <td>Aksi</td>
    </tr>
    @foreach ($warga as $w )
    <tr>
        <td>{{$w->id}}</td>
        <td>{{$w->nama}}</td>
        <td>{{$w->nik}}</td>
        <td>{{$w->no_kk}}</td>
        <td>{{$w->jenis_kelamin}}</td>
        <td>{{$w->alamat}}</td>
        <td>
            <a href="warga/{{$w->id}}/edit">Edit</a>
            <form method="post" action="/warga/{{$w->id}}">
            @csrf
            @method('delete')
            <input type="submit" value="Delete">
            </form>
    </td>
    </tr>
    @endforeach
</table>