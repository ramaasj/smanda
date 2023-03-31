<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komite;

class KomiteController extends Controller
{
    public static function getAllKomite()
    {
        return Komite::all();
    }
    public function index()
    {
        $komite = Komite::all();
        return view('profil', ['listKomite' => $komite]);
    }

    public function admin()
    {
        $komite = Komite::all();
        return view('adminPages.adminprofil', ['listKomite' => $komite]);
    }

    public function create()
    {
        return view('adminPages.addkomite');
    }

    public function store(Request $request)
    {
        Komite::create($request->except('_token', 'submit'));
        return redirect('/adminprofil');
    }

    public function update($id)
    {
        $komite = Komite::find($id);
        return view('adminPages.updatekomite', compact(['komite']));
    }

    public function updateStore($id, Request $request)
    {
        $komite = Komite::find($id);
        $komite -> update ($request -> except(['_token', 'submit']));
        return redirect('/adminprofil');
    }

    public function delete($id)
    {
        $komite = Komite::find($id);
        $komite -> delete();
        return redirect('/adminprofil');
    }
}
