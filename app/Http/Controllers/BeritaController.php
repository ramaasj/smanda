<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Http\Requests\StoreBeritaRequest;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::all();
        return view('berita', ['listBerita' => $berita]);
    }
    public function getAllBerita()
    {
        return Berita::all();
    }
    public function admin()
    {
        $berita = Berita::all();
        return view('adminPages.adminberita', ['listBerita' => $berita]);
    }
    public function detail($id)
    {
        $berita = Berita::findOrFail($id);
        return view('detailberita', ['berita' => $berita]);
    }
    public function create()
    {
        return view('adminPages.addberita');
    }
    public function store(StoreBeritaRequest $request)
    {
        $imageName = time() . '.' . $request->foto_berita->extension();
        $uploadedImage = $request->foto_berita->move(public_path('assets/img/berita'), $imageName);
        $imagePath = 'assets/img/berita/' . $imageName;

        $params = $request->validated();

        if ($ekskul = Berita::create($params)) {
            $ekskul->foto_berita = $imagePath;
            $ekskul->save();

            return redirect('/adminberita')->with('success', 'Added!');
        }
    }
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('adminPages.updateberita', ['berita' => $berita]);
    }
    public function update(StoreBeritaRequest $request, $id)
    {
        $berita = Berita::findOrFail($id);

        $params = $request->validated();

        if ($request->hasFile('foto_berita')) {
            $imageName = time() . '.' . $request->foto_berita->extension();
            $uploadedImage = $request->foto_berita->move(public_path('assets/img/berita'), $imageName);
            $imagePath = 'assets/img/berita/' . $imageName;
            $params['foto_berita'] = $imagePath;
        }

        $berita->update($params);

        return redirect('/adminberita')->with('success', 'Updated!');
    }
    public function destroy($id)
    {
        $berita = Berita::find($id);
        $berita->delete();
        return redirect('/adminberita');
    }
}
