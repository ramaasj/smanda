<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Points;

class PointsController extends Controller
{
    public static function getAllPoints()
    {
        return Points::all();
    }
    public function index()
    {
        $points = Points::all();
        return view('home', ['listPoints' => $points]);
    }

    public function admin()
    {
        $points = Points::all();
        return view('adminPages.adminhome', ['listPoints' => $points]);
    }

    public function create()
    {
        return view('adminPages.addPoints');
    }

    public function store(Request $request)
    {
        Points::create($request->except('_token', 'submit'));
        return redirect('/adminhome');
    }

    public function edit($id)
    {
        $points = Points::find($id);
        return view('adminPages.updatePoints', compact(['points']));
    }

    public function update($id, Request $request)
    {
        $points = Points::find($id);
        $points->update($request->except(['_token', 'submit']));
        return redirect('/adminhome');
    }

    public function delete($id)
    {
        $points = Points::find($id);
        $points->delete();
        return redirect('/adminhome');
    }
}
