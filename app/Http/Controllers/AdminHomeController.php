<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PointsController;
use App\Http\Controllers\PersentaseController;

class AdminHomeController extends Controller
{
    public function admin()
    {
        $pointsController = new PointsController();
        $persentaseController = new PersentaseController();

        $listPoints = PointsController::getAllPoints();
        $listPersentase = PersentaseController::getAllPersentase();


        return view('adminPages.adminhome', compact('listPoints', 'listPersentase'));
    }
}
