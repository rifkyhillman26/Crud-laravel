<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    // menambahkan data
    protected $fillable = ['nama','alamat'];
  
    // menyembunyikan 
    protected $hidden = ['created_at', 'updated_at'];

    // Menambahkan kolom 
    protected $appends = ['lengkap'];

    // Mengubah tampilan Data base di bagian UI
    public function getLengkapAttribute() {
      return "MR." . $this->nama;
  }
}
