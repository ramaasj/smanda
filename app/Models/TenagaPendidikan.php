<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenagaPendidikan extends Model
{
    use HasFactory;
    protected $table = 'tenaga_kependidikan_profil';

    protected $fillable = [
        'nama',
        'jabatan',
        'foto_tenaga_kependidikan'
    ];
}
