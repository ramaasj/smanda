<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Misi;

class MisiController extends Controller
{
    public static function getAllMisi()
    {
        return Misi::all();
    }
}