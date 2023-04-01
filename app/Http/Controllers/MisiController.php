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

    public function create()
    {
        return view('adminPages.addmisi');
    }

    public function store(Request $request)
    {
        Misi::create($request->except('_token', 'submit'));
        return redirect('/adminprofil');
    }

    public function update($id)
    {
        $misi = Misi::find($id);
        return view('adminPages.updatemisi', compact(['misi']));
    }

    public function updateStore($id, Request $request)
    {
        $misi = Misi::find($id);
        $misi -> update ($request -> except(['_token', 'submit']));
        return redirect('/adminprofil');
    }

    public function delete($id)
    {
        $misi = Misi::find($id);
        $misi -> delete();
        return redirect('/adminprofil');
    }
}