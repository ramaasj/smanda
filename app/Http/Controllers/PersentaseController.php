<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persentase;

class PersentaseController extends Controller
{
    public static function getAllPersentase()
    {
        return Persentase::all();
    }
    public function index()
    {
        $persentase = Persentase::all();
        return view('home', ['listPersentase' => $persentase]);
    }

    public function admin()
    {
        $persentase = Persentase::all();
        return view('adminPages.adminHome', ['listPersentase' => $persentase]);
    }

    public function create()
    {
        return view('adminPages.addpersentase');
    }

    public function store(Request $request)
    {
        Persentase::create($request->except('_token', 'submit'));
        return redirect('/adminHome');
    }

    public function edit($id)
    {
        $persentase = Persentase::find($id);
        return view('adminPages.updatepersentase', compact(['persentase']));
    }

    public function update($id, Request $request)
    {
        $persentase = Persentase::find($id);
        $persentase->update($request->except(['_token', 'submit']));
        return redirect('/adminHome');
    }

    public function delete($id)
    {
        $persentase = Persentase::find($id);
        $persentase->delete();
        return redirect('/adminHome');
    }
}
