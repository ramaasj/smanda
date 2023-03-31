<?php

use App\Http\Controllers\AlumniController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KomiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\AdminProfilController;
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

// Profil Komite//
Route::get('/profil', [KomiteController::class, 'index']);


Route::get('/updatekomite/{id}', [KomiteController::class, 'update']);

Route::put('/updatekomite/{id}/store', [KomiteController::class, 'updateStore']);

Route::get('/addkomite', [KomiteController::class, 'create']);

Route::delete('/deletekomite/{id}', [KomiteController::class, 'delete']);

Route::post('/addkomite/store', [KomiteController::class, 'store']);


Route::get('/profil', [StrukturController::class, 'index']);


Route::get('/adminprofil/addstruktur', [StrukturController::class, 'create']);

Route::post('/addstruktur/store', [StrukturController::class, 'store']);

Route::get('/adminprofil', [AdminProfilController::class, 'admin']);

Route::put('/updatestruktur/{id}', [StrukturController::class, 'update']);

Route::get('/updatestruktur/{id}/edit', [StrukturController::class, 'edit']);
