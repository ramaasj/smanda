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

    public function create()
    {
        return view('adminPages.addmoto');
    }

    public function store(Request $request)
    {
        Moto::create($request->except('_token', 'submit'));
        return redirect('/adminProfil');
    }

    public function update($id)
    {
        $moto = Moto::find($id);
        return view('adminPages.updatemoto', compact(['moto']));
    }

    public function updateStore($id, Request $request)
    {
        $moto = Moto::find($id);
        $moto -> update ($request -> except(['_token', 'submit']));
        return redirect('/adminProfil');
    }

    public function delete($id)
    {
        $moto = Moto::find($id);
        $moto -> delete();
        return redirect('/adminProfil');
    }
}
