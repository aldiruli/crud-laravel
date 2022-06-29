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
            <form action="/siswa/{{$siswa->id}}/update" method="POST">
                {{ csrf_field() }}
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama Depan</label>
                  <input name="nama_depan" value="{{$siswa->nama_depan}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
               </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Nama Belakang</label>
                  <input name="nama_belakang" value="{{$siswa->nama_belakang}}" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Belakang">
                </div>
                <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Pilih Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option value="l" @if ($siswa->jenis_kelamin == 'l')
                        selected
                    @endif>Laki-laki</option>
                    <option value="p" @if ($siswa->jenis_kelamin == 'p')
                        selected
                    @endif>Perempuan</option>
                  </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Agama</label>
                    <select name="agama" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option value="islam" @if ($siswa->agama == 'islam')
                            selected
                        @endif>Islam</option>
                        <option value="katolik" @if ($siswa->agama == 'katolik')
                            selected
                        @endif>Katolik</option>
                    </select>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <textarea name="alamat" value="{{$siswa->alamat}}" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Alamat</label>
                    </div>
                </div>
              
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-warning">Submit</button>
        </div>
    </form>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>