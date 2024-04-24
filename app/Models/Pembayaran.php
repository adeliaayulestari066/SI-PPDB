<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayaran'; 
    protected $fillable = [
        'bukti',
        'tgl_pembayaran',
        'status',
        'siswa_id',
    ];

}
