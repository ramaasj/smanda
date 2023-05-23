<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ekstrakurikuler;
use App\Http\Requests\StoreEkstrakurikulerRequest;

class EkstrakurikulerController extends Controller
{
    public function index()
    {
        $ekskul = Ekstrakurikuler::all();
        return view('ekstrakurikuler', ['listEkskul' => $ekskul]);
    }
    public static function getAllEkskul()
    {
        return Ekstrakurikuler::all();
    }
    public function admin()
    {
        $ekskul = Ekstrakurikuler::all();
        return view('adminPages.adminekstrakurikuler', ['listEkskul' => $ekskul]);
    }
    public function create()
    {
        return view('adminPages.addekstrakurikuler');
    }
    public function store(StoreEkstrakurikulerRequest $request)
    {
        $imageName = time() . '.' . $request->foto_ekskul->extension();
        $uploadedImage = $request->foto_ekskul->move(public_path('assets/img/ekskul'), $imageName);
        $imagePath = 'assets/img/ekskul/' . $imageName;

        $params = $request->validated();

        if ($ekskul = Ekstrakurikuler::create($params)) {
            $ekskul->foto_ekskul = $imagePath;
            $ekskul->save();

            return redirect('/adminekstrakurikuler')->with('success', 'Added!');
        }
    }
    public function edit($id)
    {
        $ekskul = Ekstrakurikuler::findOrFail($id);
        return view('adminPages.updateekstrakurikuler', ['ekskul' => $ekskul]);
    }
    public function update(StoreEkstrakurikulerRequest $request, $id)
    {
        $ekskul = Ekstrakurikuler::findOrFail($id);

        $params = $request->validated();

        if ($request->hasFile('foto_ekskul')) {
            $imageName = time() . '.' . $request->foto_ekskul->extension();
            $uploadedImage = $request->foto_ekskul->move(public_path('assets/img/ekskul'), $imageName);
            $imagePath = 'assets/img/ekskul/' . $imageName;
            $params['foto_ekskul'] = $imagePath;
        }

        $ekskul->update($params);

        return redirect('/adminekstrakurikuler')->with('success', 'Updated!');
    }
    public function destroy($id)
    {
        $ekskul = Ekstrakurikuler::find($id);
        $ekskul->delete();
        return redirect('/adminekstrakurikuler');
    }
}
