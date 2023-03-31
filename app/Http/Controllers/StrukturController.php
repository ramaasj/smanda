<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStrukturRequest;
use App\Models\Struktur;
use Illuminate\Http\Request;

class StrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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
        return view('adminPages.adminprofil', ['listStruktur' => $struktur]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPages.addstruktur');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStrukturRequest $request)
    {
        $imageName = time() . '.' . $request->foto_org_sekolah->extension();
        $uploadedImage = $request->foto_org_sekolah->move(public_path('assets/img'), $imageName);
        $imagePath = 'assets/img/' . $imageName;

        $params = $request->validated();

        if ($struktur = Struktur::create($params)) {
            $struktur->foto_org_sekolah = $imagePath;
            $struktur->save();

            return redirect('/adminprofil')->with('success', 'Added!');
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
        $struktur = Struktur::findOrFail($id);
        return view('adminPages.updatestruktur', ['struktur' => $struktur]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreStrukturRequest $request, $id)
    {
        $struktur = Struktur::findOrFail($id);

        $params = $request->validated();

        if ($request->hasFile('foto_org_sekolah')) {
            $imageName = time() . '.' . $request->foto_org_sekolah->extension();
            $uploadedImage = $request->foto_org_sekolah->move(public_path('assets/img'), $imageName);
            $imagePath = 'assets/img/' . $imageName;
            $params['foto_org_sekolah'] = $imagePath;
        }

        $struktur->update($params);

        return redirect('/adminprofil')->with('success', 'Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
