<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tokoh extends Model
{
    use HasFactory;
    protected $table = 'tokoh_home';

    protected $fillable = [
        'nama_tokoh',
        'foto_tokoh',
    ];
}
