<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTokohRequest;
use App\Models\Tokoh;
use Illuminate\Http\Request;

class TokohController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function getAllTokoh()
    {
        return Tokoh::all();
    }
    public function index()
    {
        $tokoh = Tokoh::all();
        return view('home', ['listTokoh' => $tokoh]);
    }

    public function admin()
    {
        $tokoh = Tokoh::all();
        return view('adminPages.adminHome', ['listTokoh' => $tokoh]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPages.addTokoh');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTokohRequest $request)
    {
        $imageName = time() . '.' . $request->foto_tokoh->extension();
        $uploadedImage = $request->foto_tokoh->move(public_path('assets/img'), $imageName);
        $imagePath = 'assets/img/' . $imageName;

        $params = $request->validated();

        if ($tokoh = Tokoh::create($params)) {
            $tokoh->foto_tokoh = $imagePath;
            $tokoh->save();

            return redirect('/adminHome')->with('success', 'Added!');
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
        $tokoh = Tokoh::findOrFail($id);
        return view('adminPages.updateTokoh', ['tokoh' => $tokoh]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTokohRequest $request, $id)
    {
        $tokoh = Tokoh::findOrFail($id);

        $params = $request->validated();

        if ($request->hasFile('foto_tokoh')) {
            $imageName = time() . '.' . $request->foto_tokoh->extension();
            $uploadedImage = $request->foto_tokoh->move(public_path('assets/img'), $imageName);
            $imagePath = 'assets/img/' . $imageName;
            $params['foto_tokoh'] = $imagePath;
        }

        $tokoh->update($params);

        return redirect('/adminHome')->with('success', 'Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tokoh = Tokoh::find($id);
        $tokoh->delete();
        return redirect('/adminHome');
    }
}
