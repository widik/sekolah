@extends('layout.master')

@section('content')
<style type="text/css">
	img{
		padding-left: 20px;
	}
</style>
    <div class="row">
        <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
            <h2>Data Siswa</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li>
                    <a role="button" href="/siswa/pdf" class="btn btn-info">PDF</a>
                </li>
                <li>
                    <a role="button" href="/siswa/excel" class="btn btn-info">XLS</a>
                </li>
                <li>
                    <a class="btn btn-primary" data-toggle="modal" data-target="#tambah_siswa" role="button">Tambah</a>
                </li>
            </ul>
            <div class="clearfix"></div>
            </div>
            <div class="x_content">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{session('success')}}
                    </div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Depan</th>
                            <th scope="col">Nama Belakang</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Barcode</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_siswa as $siswa)

                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td><a href="/siswa/{{$siswa->id}}/profil">{{$siswa->nama_depan}}</a></td>
                            <td><a href="/siswa/{{$siswa->id}}/profil">{{$siswa->nama_belakang}}</a></td>
                            <td>{{$siswa->jenis_kelamin}}</td>
                            <td>{{$siswa->agama}}</td>
                            <td>{{$siswa->alamat}}</td>
                            <td><img src="data:image/png;base64,{{DNS1D::getBarcodePNG('Harto', 'C39')}}" alt="barcode" /></td>
                            <td>
                                <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?');">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="tambah_siswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="/siswa/create" method="post">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="namaDepan">Nama Depan</label>
                            <input type="text" class="form-control" id="nama_depan" name="nama_depan">
                        </div>
                        <div class="form-group">
                            <label for="namaBelakang">Nama Belakang</label>
                            <input type="text" class="form-control" id="nama_belakang" name="nama_belakang">
                        </div>
                        <div class="form-group">
                            <label for="namaBelakang">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="jenisKelamin">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                <option value="1">Laki-laki</option>
                                <option value="2">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Agama">Agama</label>
                            <input type="text" class="form-control" id="agama" name="agama">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
