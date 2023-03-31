<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kepsek;

class KepsekController extends Controller
{
    public static function getAllKepsek()
    {
        return Kepsek::all();
    }
}