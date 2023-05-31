<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WakepsekHome extends Model
{
    use HasFactory;

    protected $table = 'wakepsek_home';

    protected $fillable = [
        'nama',
        'jabatan',
        'foto_wakepsek',
    ];
}
