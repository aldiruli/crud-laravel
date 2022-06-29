<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Siswa</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        @if (session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
          </div>        
        @endif
        
        <div class="row">
            <div class="col-md-6">
                Data Siswa
            </div>
            <div class="col-md-6">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary float-right btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah Data Siswa
                </button>
            </div>            

            <table class="table table-hover">
                <tr>
                    <td>
                        Nama Depan :
                    </td>
                    <td>
                        Nama Belakang :
                    </td>
                    <td>
                        Jenis Kelamin :
                    </td>
                    <td>
                        Agama :
                    </td>
                    <td>
                        Alamat :
                    </td>
                </tr>
                <tr>
                    @foreach ($data_siswa as $siswa)
                        <tr>
                            <td>
                                {{$siswa -> nama_depan}}
                            </td>
                            <td>
                                {{$siswa -> nama_belakang}}
                            </td>
                            <td>
                                {{$siswa -> jenis_kelamin}}
                            </td>
                            <td>
                                {{$siswa -> agama}}
                            </td>
                            <td>
                                {{$siswa -> alamat}}
                            </td>
                        </tr>
                    @endforeach
                </tr>
            </table>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/siswa/create" method="POST">
                    {{ csrf_field() }}
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nama Depan</label>
                      <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
                   </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Nama Belakang</label>
                      <input name="nama_belakang" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Belakang">
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Pilih Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option value="l">Laki-laki</option>
                        <option value="p">Perempuan</option>
                      </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Agama</label>
                        <select name="agama" class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option value="islam">Islam</option>
                            <option value="katolik">Katolik</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <textarea name="alamat" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">Alamat</label>
                        </div>
                    </div>
                  
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>