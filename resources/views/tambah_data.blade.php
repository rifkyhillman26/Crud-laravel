<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data</title>
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD Data siswa - <strong>TAMBAH DATA</strong>
            </div>
            <div class="card-body">
                <a href="/datasiswa" class="btn btn-primary">Kembali</a>
                <br />
                <br />

                <form method="post" action="/prosesdata">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama siswa ..">

                        @if($errors->has('nama'))
                        <div class="text-danger">
                            {{ $errors->first('nama')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" placeholder="Alamat siswa .."></textarea>

                        @if($errors->has('alamat'))
                        <div class="text-danger">
                            {{ $errors->first('alamat')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </div>

                </form>

            </div>
        </div>
    </div>
</body>

</html>