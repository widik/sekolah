@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <form action="/siswa/{{$siswa->id}}/update" method="post">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="namaDepan">Nama Depan</label>
                <input type="text" class="form-control" id="nama_depan" name="nama_depan" value="{{$siswa->nama_depan}}">
                </div>
                <div class="form-group">
                    <label for="namaBelakang">Nama Belakang</label>
                    <input type="text" class="form-control" id="nama_belakang" name="nama_belakang" value="{{$siswa->nama_belakang}}">
                </div>
                <div class="form-group">
                    <label for="jenisKelamin">Jenis Kelamin</label>
                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                        <option value="L" @if ($siswa->jenis_kelamin == "L") selected @endif>Laki-laki</option>
                        <option value="P" @if ($siswa->jenis_kelamin == "P") selected @endif>Perempuan</option>
                    </select>
                    </div>
                <div class="form-group">
                    <label for="Agama">Agama</label>
                    <input type="text" class="form-control" id="agama" name="agama" value="{{$siswa->agama}}">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3">{{$siswa->alamat}}</textarea>
                </div>


            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-warning">Update</button>
            </div>
        </form>

    </div>
</div>
@endsection
