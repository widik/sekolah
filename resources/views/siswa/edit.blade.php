@extends('layout.master')

@section('content')

    <div class="row">
        <div class="col-md">
            <div class="x_panel">
              <div class="x_title">
                <h2>Edit Data Siswa</h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <br />
                <form class="form-horizontal form-label-left" action="/siswa/{{$siswa->id}}/update" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Nama Depan</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="text" class="form-control" placeholder="Nama Depan" name="nama_depan" value="{{$siswa->nama_depan}}">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Nama Belakang</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="text" class="form-control" placeholder="Nama Belakang" name="nama_belakang" value="{{$siswa->nama_belakang}}">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Jenis Kelamin</label>
                        <div class="col-md-9 col-sm-9 ">
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                <option value="L" @if ($siswa->jenis_kelamin == "L") selected @endif>Laki-laki</option>
                                <option value="P" @if ($siswa->jenis_kelamin == "P") selected @endif>Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Agama</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="text" class="form-control" placeholder="Agama" name="agama" value="{{$siswa->agama}}">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Alamat</label>
                        <div class="col-md-9 col-sm-9 ">
                            <textarea class="form-control" id="alamat" name="alamat" rows="3">{{$siswa->alamat}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Avatar</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="file" class="form-control" placeholder="Avatar" name="avatar">
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9  offset-md-3">
                        <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>

                </form>
              </div>
            </div>
          </div>
    </div>

@endsection
