<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePendidikRequest;
use App\Models\Pendidik;
use Illuminate\Http\Request;

class PendidikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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
        return view('adminPages.adminprofil', ['listPendidik' => $pendidik]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPages.addpendidik');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePendidikRequest $request)
    {
        $imageName = time() . '.' . $request->foto_pendidik->extension();
        $uploadedImage = $request->foto_pendidik->move(public_path('assets/img'), $imageName);
        $imagePath = 'assets/img/' . $imageName;

        $params = $request->validated();

        if ($pendidik = Pendidik::create($params)) {
            $pendidik->foto_pendidik = $imagePath;
            $pendidik->save();

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
        $pendidik = Pendidik::findOrFail($id);
        return view('adminPages.updatependidik', ['pendidik' => $pendidik]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePendidikRequest $request, $id)
    {
        $pendidik = Pendidik::findOrFail($id);

        $params = $request->validated();

        if ($request->hasFile('foto_pendidik')) {
            $imageName = time() . '.' . $request->foto_pendidik->extension();
            $uploadedImage = $request->foto_pendidik->move(public_path('assets/img'), $imageName);
            $imagePath = 'assets/img/' . $imageName;
            $params['foto_pendidik'] = $imagePath;
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
        $pendidik = Pendidik::find($id);
        $pendidik->delete();
        return redirect('/adminprofil');
    }
}
