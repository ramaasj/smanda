<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidik extends Model
{
    use HasFactory;
    protected $table = 'pendidik_profil';

    protected $fillable = [
        'nama',
        'jabatan',
        'foto_pendidik'
    ];
}
