<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PersentaseController;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\PointsController;
use App\Http\Controllers\KepsekHomeController;
use App\Http\Controllers\WakepsekHomeController;

class UserHomeController extends Controller
{
    public function index()
    {
        $listPersentase = PersentaseController::getAllPersentase();
        $listGreet = GreetController::getAllGreet();
        $listPoints = PointsController::getAllPoints();
        $listKepsek = KepsekHomeController::getAllKepsek();
        $listWakepsek = WakepsekHomeController::getAllWakepsek();

        return view('home', compact('listPersentase', 'listGreet', 'listPoints', 'listKepsek', 'listWakepsek'));
    }
}
