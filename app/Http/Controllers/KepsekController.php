<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKepsekRequest;
use App\Models\Kepsek;
use Illuminate\Http\Request;

class KepsekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function getAllKepsek()
    {
        return Kepsek::all();
    }
    public function index()
    {
        $kepsek = Kepsek::all();
        return view('profil', ['listKepsek' => $kepsek]);
    }

    public function admin()
    {
        $kepsek = Kepsek::all();
        return view('adminPages.adminProfil', ['listKepsek' => $kepsek]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPages.addKepsek');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKepsekRequest $request)
    {
        $imageName = time() . '.' . $request->foto_kepsek->extension();
        $uploadedImage = $request->foto_kepsek->move(public_path('assets/img/kepsek'), $imageName);
        $imagePath = 'assets/img/kepsek/' . $imageName;

        $params = $request->validated();

        if ($kepsek = Kepsek::create($params)) {
            $kepsek->foto_kepsek = $imagePath;
            $kepsek->save();

            return redirect('/adminProfil')->with('success', 'Added!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kepsek = Kepsek::findOrFail($id);
        return view('adminPages.updateKepsek', ['kepsek' => $kepsek]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreKepsekRequest $request, $id)
    {
        $kepsek = Kepsek::findOrFail($id);

        $params = $request->validated();

        if ($request->hasFile('foto_kepsek')) {
            $imageName = time() . '.' . $request->foto_kepsek->extension();
            $uploadedImage = $request->foto_kepsek->move(public_path('assets/img/kepsek'), $imageName);
            $imagePath = 'assets/img/kepsek/' . $imageName;
            $params['foto_kepsek'] = $imagePath;
        }

        $kepsek->update($params);

        return redirect('/adminProfil')->with('success', 'Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kepsek = Kepsek::find($id);
        $kepsek->delete();
        return redirect('/adminProfil');
    }
}
