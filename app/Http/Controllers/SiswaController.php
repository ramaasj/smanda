<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::orderBy('class', 'asc')->get();
        $totalLaki = Siswa::all()->sum('laki');
        $totalPerempuan = Siswa::all()->sum('perempuan');
        $totalJumlah = Siswa::all()->sum('jumlah');
        return view('siswa', ['listSiswa' => $siswa], compact('totalLaki', 'totalPerempuan', 'totalJumlah'));
    }

    public function admin()
    {
        $siswa = Siswa::orderBy('class', 'asc')->get();
        $totalLaki = Siswa::all()->sum('laki');
        $totalPerempuan = Siswa::all()->sum('perempuan');
        $totalJumlah = Siswa::all()->sum('jumlah');
        return view('adminPages.adminsiswa', ['listSiswa' => $siswa], compact('totalLaki', 'totalPerempuan', 'totalJumlah'));
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
