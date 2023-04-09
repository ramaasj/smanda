<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTenagaPendidikRequest;
use App\Models\TenagaPendidikan;
use Illuminate\Http\Request;

class TenagaPendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function getAllTenagaPendidikan()
    {
        return TenagaPendidikan::all();
    }
    public function index()
    {
        $tenaga_pendidik = TenagaPendidikan::all();
        return view('profil', ['listTenagaPendidikan' => $tenaga_pendidik]);
    }

    public function admin()
    {
        $tenaga_pendidik = TenagaPendidikan::all();
        return view('adminPages.adminprofil', ['listTenagaPendidikan' => $tenaga_pendidik]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPages.addtenagapendidik');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTenagaPendidikRequest $request)
    {
        $imageName = time() . '.' . $request->foto_tenaga_kependidikan->extension();
        $uploadedImage = $request->foto_tenaga_kependidikan->move(public_path('assets/img'), $imageName);
        $imagePath = 'assets/img/' . $imageName;

        $params = $request->validated();

        if ($tenaga_pendidik = TenagaPendidikan::create($params)) {
            $tenaga_pendidik->foto_tenaga_kependidikan = $imagePath;
            $tenaga_pendidik->save();

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
        $tenaga_pendidik = TenagaPendidikan::findOrFail($id);
        return view('adminPages.updatetenagapendidik', ['tenaga_pendidik' => $tenaga_pendidik]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTenagaPendidikRequest $request, $id)
    {
        $pendidik = TenagaPendidikan::findOrFail($id);

        $params = $request->validated();

        if ($request->hasFile('foto_tenaga_kependidikan')) {
            $imageName = time() . '.' . $request->foto_tenaga_kependidikan->extension();
            $uploadedImage = $request->foto_tenaga_kependidikan->move(public_path('assets/img'), $imageName);
            $imagePath = 'assets/img/' . $imageName;
            $params['foto_tenaga_kependidikan'] = $imagePath;
        }

        $pendidik->update($params);

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
        $tenaga_pendidik = TenagaPendidikan::find($id);
        $tenaga_pendidik->delete();
        return redirect('/adminprofil');
    }
}
