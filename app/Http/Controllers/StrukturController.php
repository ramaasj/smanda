<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Struktur;

class StrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public static function getAllStruktur()
    {
        return Struktur::all();
    }

    public function index()
    {
        $struktur = Struktur::all();
        return view('profil', ['listStruktur' => $struktur]);
    }

    public function admin()
    {
        $struktur = Struktur::all();
        return view('adminPages.adminProfil', ['listStruktur' => $struktur]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPages.addStruktur');
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
            'desc' => 'required|max:200',
            'foto_org_sekolah' => 'required|url',
        ]);

        $struktur = new Struktur;
        $struktur->desc = $request->desc;
        $struktur->foto_org_sekolah = $request->foto_org_sekolah;
        $struktur->save();

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
        $struktur = Struktur::findOrFail($id);
        return view('struktur.show', compact('struktur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $struktur = Struktur::findOrFail($id);
        return view('adminPages.updateStruktur', ['struktur' => $struktur]);
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
            'desc' => 'required|max:200',
            'foto_org_sekolah' => 'required|url',
        ]);

        $struktur = Struktur::findOrFail($id);
        $struktur->desc = $request->desc;
        $struktur->foto_org_sekolah = $request->foto_org_sekolah;
        $struktur->save();

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
        $struktur = Struktur::findOrFail($id);
        $struktur->delete();
        return redirect('/adminProfil')->with('success', 'Data berhasil dihapus');
    }
}
