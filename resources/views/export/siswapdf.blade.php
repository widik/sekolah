<div style="float:left"><h1>Data Siswa</h1></div>
<div style="float:right">{{ changeDateFormate(date('Y-m-d'),'m/d/Y') }}</div>
<div style="clear:both"></div>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Depan</th>
            <th scope="col">Nama Belakang</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Agama</th>
            <th scope="col">Alamat</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data_siswa as $siswa)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$siswa->nama_depan}}</td>
            <td>{{$siswa->nama_belakang}}</td>
            <td>{{$siswa->jenis_kelamin}}</td>
            <td>{{$siswa->agama}}</td>
            <td>{{$siswa->alamat}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
