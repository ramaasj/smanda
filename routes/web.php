<?php

use App\Http\Controllers\AlumniController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KomiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\AdminProfilController;
use App\Http\Controllers\KepsekController;
use App\Http\Controllers\PendidikController;
use App\Http\Controllers\MotoController;
use App\Http\Controllers\VisiController;
use App\Http\Controllers\MisiController;
use App\Models\Struktur;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

Route::view('/', 'home');

Route::get('/siswa', [SiswaController::class, 'index']);

Route::view('/ekstrakurikuler', 'ekstrakurikuler');

Route::get('/berita', [BeritaController::class, 'index']);

Route::view('/detail-berita', 'detail-berita');

Route::get('/alumni', [AlumniController::class, 'index']);

Route::view('/adminhome', 'adminPages/adminhome');

Route::get('/adminsiswa', [SiswaController::class, 'admin']);

Route::get('/updatesiswa/{id}', [SiswaController::class, 'update']);

Route::put('/updatesiswa/{id}/store', [SiswaController::class, 'updateStore']);

Route::get('/addsiswa', [SiswaController::class, 'create']);

Route::delete('/deletesiswa/{id}', [SiswaController::class, 'delete']);

Route::post('/addsiswa/store', [SiswaController::class, 'store']);

Route::view('/adminekstrakurikuler', 'adminPages/adminekstrakurikuler');

Route::view('/addekstrakurikuler', 'adminPages/addekstrakurikuler');

Route::view('/updateekstrakurikuler', 'adminPages/updateekstrakurikuler');

Route::view('/adminberita', 'adminPages/adminberita');

Route::view('/addberita', 'adminPages/addberita');

Route::view('/updateberita', 'adminPages/updateberita');

Route::get('/adminalumni', [AlumniController::class, 'admin']);

Route::get('/addalumni', [AlumniController::class, 'create']);

Route::post('/addalumni/store', [AlumniController::class, 'store']);

Route::get('/updatealumni/{id}', [AlumniController::class, 'update']);

Route::put('/updatealumni/{id}/store', [AlumniController::class, 'updateStore']);

Route::delete('/deletealumni/{id}', [AlumniController::class, 'delete']);

// Profil //
Route::get('/adminprofil', [AdminProfilController::class, 'admin']);








//Admin Moto
Route::get('/addmoto', [MotoController::class, 'create']);

Route::post('/addmoto/store', [MotoController::class, 'store']);

Route::get('/updatemoto/{id}', [MotoController::class, 'update']);

Route::post('/updatemoto/{id}/store', [MotoController::class, 'updateStore']);

Route::delete('/deletemoto/{id}', [MotoController::class, 'delete']);

//Admin Visi
Route::get('/addvisi', [VisiController::class, 'create']);

Route::post('/addvisi/store', [VisiController::class, 'store']);

Route::get('/updatevisi/{id}', [VisiController::class, 'update']);

Route::post('/updatevisi/{id}/store', [VisiController::class, 'updateStore']);

Route::delete('/deletevisi/{id}', [VisiController::class, 'delete']);

//Admin Misi
Route::get('/addmisi', [MisiController::class, 'create']);

Route::post('/addmisi/store', [MisiController::class, 'store']);

Route::get('/updatemisi/{id}', [MisiController::class, 'update']);

Route::post('/updatemisi/{id}/store', [MisiController::class, 'updateStore']);

Route::delete('/deletemisi/{id}', [MisiController::class, 'delete']);

//Admin Bio Kepsek

Route::get('/updatekepsek/{id}', [KepsekController::class, 'update']);

Route::post('/updatekepsek/{id}/store', [KepsekController::class, 'updateStore']);


//Profil - Pendidik
Route::get('/profil', [PendidikController::class, 'index']);

Route::get('/adminprofil/addpendidik', [PendidikController::class, 'create']);

Route::post('/addpendidik/store', [PendidikController::class, 'store']);

Route::put('/updatependidik/{id}', [PendidikController::class, 'update']);

Route::get('/updatependidik/{id}/edit', [PendidikController::class, 'edit']);

Route::delete('/deletependidik/{id}', [PendidikController::class, 'destroy']);


//Profil - Struktur Organisasi
Route::get('/profil', [StrukturController::class, 'index']);

Route::get('/adminprofil/addstruktur', [StrukturController::class, 'create']);

Route::post('/addstruktur/store', [StrukturController::class, 'store']);

Route::put('/updatestruktur/{id}', [StrukturController::class, 'update']);

Route::get('/updatestruktur/{id}/edit', [StrukturController::class, 'edit']);


//Profil - Komite Sekolah
Route::get('/profil', [KomiteController::class, 'index']);

Route::get('/updatekomite/{id}', [KomiteController::class, 'update']);

Route::put('/updatekomite/{id}/store', [KomiteController::class, 'updateStore']);

Route::get('/addkomite', [KomiteController::class, 'create']);

Route::delete('/deletekomite/{id}', [KomiteController::class, 'delete']);

Route::post('/addkomite/store', [KomiteController::class, 'store']);
