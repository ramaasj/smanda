<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KepsekHome extends Model
{
    use HasFactory;

    protected $table = 'kepsek_home';

    protected $fillable = [
        'nama_kepsek',
        'jabatan',
        'foto_kepsek',
    ];
}
