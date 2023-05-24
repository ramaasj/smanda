<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MotoController;
use App\Http\Controllers\VisiController;
use App\Http\Controllers\MisiController;
use App\Http\Controllers\KepsekController;
use App\Http\Controllers\PendidikController;
use App\Http\Controllers\TenagaPendidikanController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\KomiteController;

class UserProfilController extends Controller
{
    public function index()
    {
        $listMoto = MotoController::getAllMoto();
        $listVisi = VisiController::getAllVisi();
        $listMisi = MisiController::getAllMisi();
        $listKepsek = KepsekController::getAllKepsek();
        $listPendidik = PendidikController::getAllPendidik();
        $listTenagaPendidikan = TenagaPendidikanController::getAllTenagaPendidikan();
        $listStruktur = StrukturController::getAllStruktur();
        $listKomite = KomiteController::getAllKomite();

        return view('profil', compact('listMoto', 'listVisi', 'listMisi', 'listKepsek', 'listPendidik', 'listTenagaPendidikan', 'listStruktur', 'listKomite'));
    }
}
