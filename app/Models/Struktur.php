<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Struktur extends Model
{
    use HasFactory;
    protected $table = 'struktur_org_sekolah';

    protected $fillable = [
        'desc',
        'foto_org_sekolah'
    ];
}
