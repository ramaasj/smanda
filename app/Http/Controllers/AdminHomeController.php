<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PersentaseController;

class AdminHomeController extends Controller
{
    public function admin()
    {
        $persentaseController = new PersentaseController();

        $listPersentase = PersentaseController::getAllPersentase();
        

        return view('adminPages.adminhome', compact('listPersentase'));
    }
}
