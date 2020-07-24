<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    // menampilkan semua data siswa
    public function index (){
        return Siswa::all();
    }

    // Menambahkan data siswa
    public function tambah(Request $request) {
        $siswa = new Siswa;
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->save();

        return "Data berhasil Di Tambahkan !!!";
    }

    // mengubah data siswa
    public function Ubah(Request $request, $id) {
        $nama = $request->nama;
        $alamat = $request->alamat;

        $siswa = Siswa::find($id);
        $siswa->nama = $nama;
        $siswa->alamat = $alamat;
        $siswa->save();

        return "Data berhasil di ubah !!";
    }

    // Menghapus data 
    public function hapus($id) {
        $siswa = Siswa::find($id);
        $siswa->delete();

        return "Data berhasil di hapus !!!";
    }
}
