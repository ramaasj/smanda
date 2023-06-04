<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public static function getAllBerita()
    {
        return Berita::all();
    }

    public function index()
    {
        $berita = Berita::all();
        return view('Berita', ['listBerita' => $berita]);
    }

    public function admin()
    {
        $berita = Berita::all();
        return view('adminPages.adminBerita', ['listBerita' => $berita]);
    }
    public function detail($id)
    {
        $berita = Berita::findOrFail($id);
        return view('detailberita', ['berita' => $berita]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPages.addBerita');
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
            'judul' => 'required|max:200',
            'kategori' => 'required',
            'description' => 'required',
            'foto_berita' => 'required|url',
        ]);

        $berita = new Berita;
        $berita->judul = $request->judul;
        $berita->kategori = $request->kategori;
        $berita->description = $request->description;
        $berita->foto_berita = $request->foto_berita;
        $berita->save();

        return redirect('/adminBerita')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        return view('berita$berita.show', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('adminPages.updateBerita', ['berita' => $berita]);
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
            'judul' => 'required|max:200',
            'kategori' => 'required',
            'description' => 'required',
            'foto_berita' => 'required|url',
        ]);

        $berita = Berita::findOrFail($id);
        $berita->judul = $request->judul;
        $berita->kategori = $request->kategori;
        $berita->description = $request->description;
        $berita->foto_berita = $request->foto_berita;
        $berita->save();

        return redirect('/adminBerita')->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();
        return redirect('/adminBerita')->with('success', 'Data berhasil dihapus');
    }
}
