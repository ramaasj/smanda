<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visi;
class VisiController extends Controller
{
    public static function getAllVisi()
    {
        return Visi::all();
    }
}
