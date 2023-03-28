<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;

class AlumniController extends Controller
{
    public function index()
    {
        $alumni = Alumni::all();
        return view('alumni', ['listAlumni' => @$alumni]);
    }

    public function admin()
    {
        $alumni = Alumni::all();
        return view('adminPages.adminalumni', ['listAlumni' => $alumni]);
    }

    public function create()
    {
        return view('adminPages.addalumni');
    }

    public function store(Request $request)
    {
        Alumni::create($request->except('_token', 'submit'));
        return redirect('/adminalumni');
    }

    public function update($id)
    {
        $alumni = Alumni::find($id);
        return view('adminPages.updatealumni', compact(['alumni']));
    }

    public function updateStore($id, Request $request)
    {
        $alumni = Alumni::find($id);
        $alumni -> update ($request -> except(['_token', 'submit']));
        return redirect('/adminalumni');
    }

    public function delete($id)
    {
        $alumni = Alumni::find($id);
        $alumni -> delete();
        return redirect('/adminalumni');
    }
}
