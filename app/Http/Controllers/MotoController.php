<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Moto;

class MotoController extends Controller
{
    public static function getAllMoto()
    {
        return Moto::all();
    }
}
