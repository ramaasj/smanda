<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Greet;

class GreetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public static function getAllGreet()
    {
        return Greet::all();
    }

    public function index()
    {
        $greet = Greet::all();
        return view('home', ['listGreet' => $greet]);
    }

    public function admin()
    {
        $greet = Greet::all();
        return view('adminPages.adminHome', ['listGreet' => $greet]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPages.addGreetHo');
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
            'gambar_greet' => 'required|url',
        ]);

        $greet = new Greet;
        $greet->gambar_greet = $request->gambar_greet;
        $greet->tahun_greet = $request->tahun_greet;
        $greet->desc_tahun = $request->desc_tahun;
        $greet->siswa_greet = $request->siswa_greet;
        $greet->desc_siswa = $request->desc_siswa;
        $greet->pendidik_greet = $request->pendidik_greet;
        $greet->desc_pendidik = $request->desc_pendidik;
        $greet->save();

        return redirect('/adminHome')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $greet = Greet::findOrFail($id);
        return view('greet.show', compact('greet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $greet = Greet::findOrFail($id);
        return view('adminPages.updateGreetHome', ['greet' => $greet]);
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
            'gambar_greet' => 'required|url',
        ]);

        $greet = Greet::findOrFail($id);
        $greet->gambar_greet = $request->gambar_greet;
        $greet->tahun_greet = $request->tahun_greet;
        $greet->desc_tahun = $request->desc_tahun;
        $greet->siswa_greet = $request->siswa_greet;
        $greet->desc_siswa = $request->desc_siswa;
        $greet->pendidik_greet = $request->pendidik_greet;
        $greet->desc_pendidik = $request->desc_pendidik;
        $greet->save();

        return redirect('/adminHome')->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $greet = Greet::findOrFail($id);
        $greet->delete();
        return redirect('/adminHome')->with('success', 'Data berhasil dihapus');
    }
}
