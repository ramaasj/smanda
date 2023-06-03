<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Moto;

class MotoController extends Controller
{
    public static function getAllmoto()
    {
        return Moto::all();
    }
    public function index()
    {
        $moto = Moto::all();
        return view('profil', ['listMoto' => $moto]);
    }
    public function admin()
    {
        $moto = Moto::all();
        return view('adminPages.adminProfil', ['listMoto' => $moto]);
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

    public function edit($id)
    {
        $moto = Moto::find($id);
        return view('adminPages.updatemoto', compact(['moto']));
    }

    public function update($id, Request $request)
    {
        $moto = Moto::find($id);
        $moto->update($request->except(['_token', 'submit']));
        return redirect('/adminProfil');
    }

    public function delete($id)
    {
        $moto = Moto::find($id);
        $moto->delete();
        return redirect('/adminProfil');
    }
}
