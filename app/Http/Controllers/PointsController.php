<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Points;

class PointsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public static function getAllPoints()
    {
        return Points::all();
    }

    public function index()
    {
        $points = Points::all();
        return view('profil', ['listPoints' => $points]);
    }

    public function admin()
    {
        $points = Points::all();
        return view('adminPages.adminHome', ['listPoints' => $points]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPages.addPoints');
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
            'title' => 'required|max:200',
            'desc' => 'required|max:200',
            'foto_point' => 'required|url',
        ]);

        $points = new Points;
        $points->title = $request->title;
        $points->desc = $request->desc;
        $points->foto_point = $request->foto_point;
        $points->save();

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
        $points = Points::findOrFail($id);
        return view('points.show', compact('points'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $points = Points::findOrFail($id);
        return view('adminPages.updatePoints', ['points' => $points]);
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
            'title' => 'required|max:200',
            'desc' => 'required|max:200',
            'foto_point' => 'required|url',
        ]);

        $points = Points::findOrFail($id);
        $points->title = $request->title;
        $points->desc = $request->desc;
        $points->foto_point = $request->foto_point;
        $points->save();

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
        $points = Points::findOrFail($id);
        $points->delete();
        return redirect('/adminHome')->with('success', 'Data berhasil dihapus');
    }
}
