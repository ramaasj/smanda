<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KepsekProfil;

class KepsekProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public static function getAllKepsek()
    {
        return KepsekProfil::all();
    }

    public function index()
    {
        $kepsek = KepsekProfil::all();
        return view('Profil', ['listKepsek' => $kepsek]);
    }

    public function admin()
    {
        $kepsek = KepsekProfil::all();
        return view('adminPages.adminProfil', ['listKepsek' => $kepsek]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPages.addKepsekProfil');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:200',
            'nip' => 'required|max:200',
            'foto_kepsek' => 'required|url',
        ]);

        $kepsek = new KepsekProfil;
        $kepsek->nama = $request->nama;
        $kepsek->nip = $request->nip;
        $kepsek->pangkat = $request->pangkat;
        $kepsek->pendidikan = $request->pendidikan;
        $kepsek->masa_kerja = $request->masa_kerja;
        $kepsek->foto_kepsek = $request->foto_kepsek;
        $kepsek->save();

        return redirect('/adminProfil')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kepsek = KepsekProfil::findOrFail($id);
        return view('kepsek.show', compact('kepsek'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kepsek = KepsekProfil::findOrFail($id);
        return view('adminPages.updateKepsekProfil', ['kepsek' => $kepsek]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|max:200',
            'nip' => 'required|max:200',
            'foto_kepsek' => 'required|url',
        ]);

        $kepsek = KepsekProfil::findOrFail($id);
        $kepsek->nama = $request->nama;
        $kepsek->nip = $request->nip;
        $kepsek->pangkat = $request->pangkat;
        $kepsek->pendidikan = $request->pendidikan;
        $kepsek->masa_kerja = $request->masa_kerja;
        $kepsek->foto_kepsek = $request->foto_kepsek;
        $kepsek->save();

        return redirect('/adminProfil')->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kepsek = KepsekProfil::findOrFail($id);
        $kepsek->delete();
        return redirect('/adminProfil')->with('success', 'Data berhasil dihapus');
    }
}
