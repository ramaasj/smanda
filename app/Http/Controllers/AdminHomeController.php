<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PointsController;
use App\Http\Controllers\PersentaseController;
use App\Http\Controllers\GreetController;

class AdminHomeController extends Controller
{
    public function admin()
    {
        $pointsController = new PointsController();
        $persentaseController = new PersentaseController();
        $greetController = new GreetController();

        $listPoints = PointsController::getAllPoints();
        $listPersentase = PersentaseController::getAllPersentase();
        $listGreet = GreetController::getAllGreet();


        return view('adminPages.adminhome', compact('listGreet', 'listPoints', 'listPersentase'));
    }
}
