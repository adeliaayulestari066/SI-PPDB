<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $table = 'guru';

    protected $fillable = [
        'nama_guru', // Tambahkan ini ke dalam fillable
        'jabatan',
        'nip_nuptk',
        'alamat',
        'no_hp',
        'status_kepegawaian',
        'gambar',
    ];
}
