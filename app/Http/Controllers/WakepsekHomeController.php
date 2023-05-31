<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WakepsekHome;

class WakepsekHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public static function getAllWakepsek()
    {
        return WakepsekHome::all();
    }

    public function index()
    {
        $Wakepsek = WakepsekHome::all();
        return view('home', ['listWakepsek' => $Wakepsek]);
    }

    public function admin()
    {
        $wakepsek = WakepsekHome::all();
        return view('adminPages.adminHome', ['listWakepsek' => $wakepsek]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPages.addWakepsekHome');
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
            'jabatan' => 'required|max:200',
            'foto_wakepsek' => 'required|url',
        ]);

        $wakepsek = new WakepsekHome;
        $wakepsek->nama = $request->nama;
        $wakepsek->jabatan = $request->jabatan;
        $wakepsek->foto_wakepsek = $request->foto_wakepsek;
        $wakepsek->save();

        return redirect('/adminHome')->with('success', 'Wakepsek berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wakepsek = WakepsekHome::findOrFail($id);
        return view('wakepsek.show', compact('wakepsek'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wakepsek = WakepsekHome::findOrFail($id);
        return view('adminPages.updateWakepsekHome', ['wakepsek' => $wakepsek]);
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
            'jabatan' => 'required|max:200',
            'foto_wakepsek' => 'required|url',
        ]);

        $wakepsek = WakepsekHome::findOrFail($id);
        $wakepsek->nama = $request->nama;
        $wakepsek->jabatan = $request->jabatan;
        $wakepsek->foto_wakepsek = $request->foto_wakepsek;
        $wakepsek->save();

        return redirect('/adminHome')->with('success', 'Wakepsek berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wakepsek = WakepsekHome::findOrFail($id);
        $wakepsek->delete();
        return redirect('/adminHome')->with('success', 'Wakepsek berhasil dihapus');
    }
}
