<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendidik;

class PendidikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public static function getAllPendidik()
    {
        return Pendidik::all();
    }

    public function index()
    {
        $pendidik = Pendidik::all();
        return view('profil', ['listPendidik' => $pendidik]);
    }

    public function admin()
    {
        $pendidik = Pendidik::all();
        return view('adminPages.adminProfil', ['listPendidik' => $pendidik]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPages.addPendidik');
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
            'foto_pendidik' => 'required|url',
        ]);

        $pendidik = new Pendidik;
        $pendidik->nama = $request->nama;
        $pendidik->jabatan = $request->jabatan;
        $pendidik->foto_pendidik = $request->foto_pendidik;
        $pendidik->save();

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
        $pendidik = Pendidik::findOrFail($id);
        return view('pendidik.show', compact('pendidik'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pendidik = Pendidik::findOrFail($id);
        return view('adminPages.updatePendidik', ['pendidik' => $pendidik]);
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
            'foto_pendidik' => 'required|url',
        ]);

        $pendidik = Pendidik::findOrFail($id);
        $pendidik->nama = $request->nama;
        $pendidik->jabatan = $request->jabatan;
        $pendidik->foto_pendidik = $request->foto_pendidik;
        $pendidik->save();

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
        $pendidik = Pendidik::findOrFail($id);
        $pendidik->delete();
        return redirect('/adminProfil')->with('success', 'Data berhasil dihapus');
    }
}
