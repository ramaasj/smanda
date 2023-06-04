<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Points extends Model
{
    use HasFactory;

    protected $table = 'point_home';
    protected $guarded = [];

    protected $fillable = [
        'title',
        'desc',
        'foto_point',
    ];
}
