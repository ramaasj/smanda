<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PointsController;
use App\Http\Controllers\PersentaseController;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\KepsekHomeController;

class AdminHomeController extends Controller
{
    public function admin()
    {
        $pointsController = new PointsController();
        $persentaseController = new PersentaseController();
        $greetController = new GreetController();
        $kepsekController = new KepsekHomeController();

        $listPoints = PointsController::getAllPoints();
        $listPersentase = PersentaseController::getAllPersentase();
        $listGreet = GreetController::getAllGreet();
        $listKepsek = KepsekHomeController::getAllKepsek();


        return view('adminPages.adminHome', compact('listGreet', 'listPoints', 'listPersentase', 'listKepsek'));
    }
}
