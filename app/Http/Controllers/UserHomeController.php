<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PersentaseController;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\PointsController;

class UserHomeController extends Controller
{
    public function index()
    {
        $listPersentase = PersentaseController::getAllPersentase();
        $listGreet = GreetController::getAllGreet();
        $listPoints = PointsController::getAllPoints();

        return view('home', compact('listPersentase', 'listGreet', 'listPoints'));
    }
}
