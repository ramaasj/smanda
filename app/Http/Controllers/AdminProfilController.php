<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\KomiteController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\PendidikController;

class AdminProfilController extends Controller
{
    public function admin()
    {
        $komiteController = new KomiteController();
        $strukturController = new StrukturController();
        $motoController = new MotoController();
        $visiController = new VisiController();
        $misiController = new MisiController();
        $kepsekController = new KepsekController();
        $pendidikController = new PendidikController();

        $listKomite = KomiteController::getAllKomite();
        $listStruktur = StrukturController::getAllStruktur();
        $listMoto = MotoController::getAllMoto();
        $listVisi = VisiController::getAllVisi();
        $listMisi = MisiController::getAllMisi();
        $listKepsek = KepsekController::getAllKepsek();
        $listPendidik = PendidikController::getAllPendidik();

        return view('adminPages.adminprofil', compact('listKomite', 'listStruktur', 'listMoto', 'listVisi', 'listMisi', 'listKepsek', 'listPendidik'));
    }
}
