<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa', ['listSiswa' => $siswa]);
    }

    public function admin()
    {
        $siswa = Siswa::all();
        return view('adminPages.adminsiswa', ['listSiswa' => $siswa]);
    }

    public function create()
    {
        return view('adminPages.addsiswa');
    }

    public function store(Request $request)
    {
        Siswa::create($request->except('_token', 'submit'));
        return redirect('/adminsiswa');
    }

    public function update($id)
    {
        $siswa = Siswa::find($id);
        return view('adminPages.updatesiswa', compact(['siswa']));
    }

    public function updateStore($id, Request $request)
    {
        $siswa = Siswa::find($id);
        $siswa -> update ($request -> except(['_token', 'submit']));
        return redirect('/adminsiswa');
    }

    public function delete($id)
    {
        $siswa = Siswa::find($id);
        $siswa -> delete();
        return redirect('/adminsiswa');
    }
}
