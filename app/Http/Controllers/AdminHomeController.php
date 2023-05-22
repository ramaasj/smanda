<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PointsController;
use App\Http\Controllers\PersentaseController;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\TokohController;

class AdminHomeController extends Controller
{
    public function admin()
    {
        $pointsController = new PointsController();
        $persentaseController = new PersentaseController();
        $greetController = new GreetController();
        $tokohController = new TokohController();

        $listPoints = PointsController::getAllPoints();
        $listPersentase = PersentaseController::getAllPersentase();
        $listGreet = GreetController::getAllGreet();
        $listTokoh = TokohController::getAllTokoh();


        return view('adminPages.adminhome', compact('listGreet', 'listPoints', 'listPersentase', 'listTokoh'));
    }
}
