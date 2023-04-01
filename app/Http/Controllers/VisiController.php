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

    public function create()
    {
        return view('adminPages.addvisi');
    }

    public function store(Request $request)
    {
        Visi::create($request->except('_token', 'submit'));
        return redirect('/adminprofil');
    }

    public function update($id)
    {
        $visi = Visi::find($id);
        return view('adminPages.updatevisi', compact(['visi']));
    }

    public function updateStore($id, Request $request)
    {
        $visi = Visi::find($id);
        $visi -> update ($request -> except(['_token', 'submit']));
        return redirect('/adminprofil');
    }

    public function delete($id)
    {
        $visi = Visi::find($id);
        $visi -> delete();
        return redirect('/adminprofil');
    }
}
