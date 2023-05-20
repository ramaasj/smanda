<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGreetRequest;
use App\Models\Greet;
use Illuminate\Http\Request;

class GreetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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
        return view('adminPages.adminhome', ['listGreet' => $greet]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPages.addGreet');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGreetRequest $request)
    {
        $imageName = time() . '.' . $request->gambar_greet->extension();
        $uploadedImage = $request->gambar_greet->move(public_path('assets/img'), $imageName);
        $imagePath = 'assets/img/' . $imageName;

        $params = $request->validated();

        if ($greet = Greet::create($params)) {
            $greet->gambar_greet = $imagePath;
            $greet->save();

            return redirect('/adminhome')->with('success', 'Added!');
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
        $greet = Greet::findOrFail($id);
        return view('adminPages.updateGreet', ['greet' => $greet]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreGreetRequest $request, $id)
    {
        $greet = Greet::findOrFail($id);

        $params = $request->validated();

        if ($request->hasFile('gambar_greet')) {
            $imageName = time() . '.' . $request->gambar_greet->extension();
            $uploadedImage = $request->gambar_greet->move(public_path('assets/img'), $imageName);
            $imagePath = 'assets/img/' . $imageName;
            $params['gambar_greet'] = $imagePath;
        }

        $greet->update($params);

        return redirect('/adminhome')->with('success', 'Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $greet = Greet::find($id);
        $greet->delete();
        return redirect('/adminhome');
    }
}
