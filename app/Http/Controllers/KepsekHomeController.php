<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KepsekHome;

class KepsekHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public static function getAllKepsek()
    {
        return KepsekHome::all();
    }

    public function index()
    {
        $kepsek = KepsekHome::all();
        return view('home', ['listKepsek' => $kepsek]);
    }

    public function admin()
    {
        $kepsek = KepsekHome::all();
        return view('adminPages.adminHome', ['listKepsek' => $kepsek]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPages.addKepsekHome');
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
            'nama_kepsek' => 'required|max:200',
            'jabatan' => 'required|max:200',
            'foto_kepsek' => 'required|url',
        ]);

        $kepsek = new KepsekHome;
        $kepsek->nama_kepsek = $request->nama_kepsek;
        $kepsek->jabatan = $request->jabatan;
        $kepsek->foto_kepsek = $request->foto_kepsek;
        $kepsek->save();

        return redirect('/adminHome')->with('success', 'Kepsek berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kepsek = KepsekHome::findOrFail($id);
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
        $kepsek = KepsekHome::findOrFail($id);
        return view('adminPages.updateKepsekHome', ['kepsek' => $kepsek]);
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
            'nama_kepsek' => 'required|max:200',
            'jabatan' => 'required|max:200',
            'foto_kepsek' => 'required|url',
        ]);

        $kepsek = KepsekHome::findOrFail($id);
        $kepsek->nama_kepsek = $request->nama_kepsek;
        $kepsek->jabatan = $request->jabatan;
        $kepsek->foto_kepsek = $request->foto_kepsek;
        $kepsek->save();

        return redirect('/adminHome')->with('success', 'Kepsek berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kepsek = KepsekHome::findOrFail($id);
        $kepsek->delete();
        return redirect('/adminHome')->with('success', 'Kepsek berhasil dihapus');
    }
}
