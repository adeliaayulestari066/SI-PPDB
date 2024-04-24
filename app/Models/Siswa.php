<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pendaftaran;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $fillable = [
        'nama_siswa',
        'umur',
        'tmpt_lhr',
        'tgl_lhr',
        'alamat',
        'agama',
        'nama_ayah',
        'pekerjaan_ayah',
        'nama_ibu',
        'pekerjaan_ibu',
        'foto_kk',
        'foto_akte',
        'no_hp_ortu',
        'user_id'
    ];
}



