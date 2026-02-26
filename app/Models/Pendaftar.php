<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    // Mengizinkan kolom-kolom ini diisi data dari form
    protected $fillable = ['email', 'nama', 'universitas', 'nim', 'jurusan'];
}