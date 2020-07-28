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

    // mengambil Id data siswa
    public function edit($id) {
        $siswa = Siswa::find($id);
        return view('edit_data', ['siswa' => $siswa]);
    }

    // mengubah data siswa
    public function update($id, Request $request) {

        $this->validate($request,[
        'nama' => 'required',
        'alamat' => 'required'
        ]);
    
        $siswa = Siswa::find($id);
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->save();

        return redirect('/datasiswa');
    }

    // Menghapus data 
    public function hapus($id) {
        $siswa = Siswa::find($id);
        $siswa->delete();

        return redirect('/datasiswa');
    }
}
