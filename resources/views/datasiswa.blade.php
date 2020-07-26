<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD Data Pegawai
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($siswa as $sw)
                        <tr>
                            <td>{{ $sw->nama }}</td>
                            <td>{{ $sw->alamat }}</td>
                            <td>
                                <a href="/pegawai/edit/{{ $sw->id }}" class="btn btn-warning">Edit</a>
                                <a href="/pegawai/hapus/{{ $sw->id }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="/siswa/tambahdata" class="btn btn-primary">Input siswa Baru</a>
            </div>
        </div>
    </div>
</body>

</html>