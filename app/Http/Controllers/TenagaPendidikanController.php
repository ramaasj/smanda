<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TenagaPendidikan;

class TenagaPendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public static function getAllTenagaPendidikan()
    {
        return TenagaPendidikan::all();
    }

    public function index()
    {
        $tenagaPendidikan = TenagaPendidikan::all();
        return view('home', ['listTenagaPendidikan' => $tenagaPendidikan]);
    }

    public function admin()
    {
        $tenagaPendidikan = TenagaPendidikan::all();
        return view('adminPages.adminProfil', ['listTenagaPendidikan' => $tenagaPendidikan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPages.addTenagaPendidik');
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
            'foto_tenaga_kependidikan' => 'required|url',
        ]);

        $tenagaPendidikan = new TenagaPendidikan;
        $tenagaPendidikan->nama = $request->nama;
        $tenagaPendidikan->jabatan = $request->jabatan;
        $tenagaPendidikan->foto_tenaga_kependidikan = $request->foto_tenaga_kependidikan;
        $tenagaPendidikan->save();

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
        $tenagaPendidikan = TenagaPendidikan::findOrFail($id);
        return view('tenagaPendidikan.show', compact('tenagaPendidikan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tenagaPendidikan = TenagaPendidikan::findOrFail($id);
        return view('adminPages.updateTenagaPendidik', ['tenagaPendidikan' => $tenagaPendidikan]);
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
            'foto_tenaga_kependidikan' => 'required|url',
        ]);

        $tenagaPendidikan = TenagaPendidikan::findOrFail($id);
        $tenagaPendidikan->nama = $request->nama;
        $tenagaPendidikan->jabatan = $request->jabatan;
        $tenagaPendidikan->foto_tenaga_kependidikan = $request->foto_tenaga_kependidikan;
        $tenagaPendidikan->save();

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
        $tenagaPendidikan = TenagaPendidikan::findOrFail($id);
        $tenagaPendidikan->delete();
        return redirect('/adminProfil')->with('success', 'Data berhasil dihapus');
    }
}
