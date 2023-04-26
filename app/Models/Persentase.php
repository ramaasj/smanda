<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persentase extends Model
{
    use HasFactory;

    protected $table = 'univ_home';
    protected $guarded = [];

    protected $fillable = [
        'year',
        'percentage',
    ];
}
