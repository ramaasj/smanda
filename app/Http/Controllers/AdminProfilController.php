<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\KomiteController;
use App\Http\Controllers\StrukturController;

class AdminProfilController extends Controller
{
    public function admin()
    {
        $komiteController = new KomiteController();
        $strukturController = new StrukturController();

        $listKomite = KomiteController::getAllKomite();
        $listStruktur = StrukturController::getAllStruktur();

        return view('adminPages.adminprofil', compact('listKomite', 'listStruktur'));
    }
}
