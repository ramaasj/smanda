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

    public function update($id)
    {
        $kepsek = Kepsek::find($id);
        return view('adminPages.updatekepsek', compact(['kepsek']));
    }

    public function updateStore($id, Request $request)
    {
        $kepsek = Kepsek::find($id);
        $kepsek -> update ($request -> except(['_token', 'submit']));
        return redirect('/adminProfil');
    }
}