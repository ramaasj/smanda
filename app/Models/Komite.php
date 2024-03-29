<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komite extends Model
{
    use HasFactory;

    protected $table = 'komite_sekolah';
    protected $guarded = [];

    protected $fillable = [
        'nama',
        'jabatan',
    ];
}
