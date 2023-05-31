<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Greet extends Model
{
    use HasFactory;
    protected $table = 'greet_home';

    protected $fillable = [
        'gambar_greet',
        'tahun_greet',
        'desc_tahun',
        'siswa_greet',
        'desc_siswa',
        'pendidik_greet',
        'desc_pendidik',
    ];
}
