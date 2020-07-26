<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    // menampilkan semua data siswa
    public function index (){
        // return Siswa::all();
        
        // mengambil data dari table pegawai
         $data = Siswa::all();

    	// mengirim data siswa ke view welcome
    	return view('datasiswa', ['siswa'=>$data]);
    }

    //web Menambahkan data siswa
        public function tambah() {
            return view('tambah_data');
    }

    // Menambahkan data siswa
    public function proses(Request $request) {
    
    	$this->validate($request,[
    		'nama' => 'required',
    		'alamat' => 'required'
    	]);
 
        Siswa::create([
    		'nama' => $request->nama,
    		'alamat' => $request->alamat
    	]);
 
    	return redirect('/datasiswa');
    }

    // mengubah data siswa
    public function Ubah(Request $request, $id) {
        $nama = $request->nama;
        $alamat = $request->alamat;

        $siswa = Siswa::find($id);
        $siswa->nama = $nama;
        $siswa->alamat = $alamat;
        $siswa->save();
    }

    // Menghapus data 
    public function hapus($id) {
        $siswa = Siswa::find($id);
        $siswa->delete();

        return redirect('/datasiswa');
    }
}
