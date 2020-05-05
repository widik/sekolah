<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">Features</a>
                <a class="nav-item nav-link" href="#">Pricing</a>
                <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </div>
            </div>
          </nav>
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
        </div>
    </div>
</body>
</html>
