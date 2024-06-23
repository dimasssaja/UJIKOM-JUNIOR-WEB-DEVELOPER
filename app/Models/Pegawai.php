<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    // atribut yang dapat diisi
    protected $fillable = [
        'nama_pegawai',
        'nomor_telepon',
        'alamat',
        'agama',
        'gender',
        'jabatan',
        'foto',
        'pendidikan'
    ];
}
