<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ekstrakurikuler;

class EkstrakurikulerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public static function getAllEkstrakurikuler()
    {
        return Ekstrakurikuler::all();
    }

    public function index()
    {
        $ekskul = Ekstrakurikuler::all();
        return view('Ekstrakurikuler', ['listEkskul' => $ekskul]);
    }

    public function admin()
    {
        $ekskul = Ekstrakurikuler::all();
        return view('adminPages.adminEkstrakurikuler', ['listEkskul' => $ekskul]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPages.addEkstrakurikuler');
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
            'naama_ekskul' => 'required|max:200',
            'foto_ekskul' => 'required|url',
        ]);

        $ekskul = new Ekstrakurikuler;
        $ekskul->naama_ekskul = $request->naama_ekskul;
        $ekskul->foto_ekskul = $request->foto_ekskul;
        $ekskul->save();

        return redirect('/adminEkstrakurikuler')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ekskul = Ekstrakurikuler::findOrFail($id);
        return view('ekskul$ekskul.show', compact('ekskul'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ekskul = Ekstrakurikuler::findOrFail($id);
        return view('adminPages.updateEkstrakurikuler', ['ekskul' => $ekskul]);
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
            'naama_ekskul' => 'required|max:200',
            'foto_ekskul' => 'required|url',
        ]);

        $ekskul = Ekstrakurikuler::findOrFail($id);
        $ekskul->naama_ekskul = $request->naama_ekskul;
        $ekskul->foto_ekskul = $request->foto_ekskul;
        $ekskul->save();

        return redirect('/adminEkstrakurikuler')->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ekskul = Ekstrakurikuler::findOrFail($id);
        $ekskul->delete();
        return redirect('/adminEkstrakurikuler')->with('success', 'Data berhasil dihapus');
    }
}
