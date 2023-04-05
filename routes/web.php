<?php

use App\Models\Struktur;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MisiController;
use App\Http\Controllers\MotoController;
use App\Http\Controllers\VisiController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KepsekController;
use App\Http\Controllers\KomiteController;
use App\Http\Controllers\PendidikController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\AdminProfilController;

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

//USER-HOME
Route::view('/', 'home');

//ADMIN-LOGIN
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::get('/home', function () {
    return view('home');
});

//USER-PAGES
Route::get('/siswa', [SiswaController::class, 'index']);
Route::view('/ekstrakurikuler', 'ekstrakurikuler');
Route::get('/berita', [BeritaController::class, 'index']);
Route::view('/detail-berita', 'detail-berita');
Route::get('/alumni', [AlumniController::class, 'index']);

//ADMIN-HOME
Route::view('/adminhome', 'adminPages/adminhome')->middleware('auth');

//ADMIN-SISWA
Route::get('/adminsiswa', [SiswaController::class, 'admin'])->middleware('auth');
Route::get('/updatesiswa/{id}', [SiswaController::class, 'update'])->middleware('auth');
Route::put('/updatesiswa/{id}/store', [SiswaController::class, 'updateStore'])->middleware('auth');
Route::get('/addsiswa', [SiswaController::class, 'create'])->middleware('auth');
Route::delete('/deletesiswa/{id}', [SiswaController::class, 'delete'])->middleware('auth');
Route::post('/addsiswa/store', [SiswaController::class, 'store'])->middleware('auth');

//ADMIN-EKSTRA
Route::view('/adminekstrakurikuler', 'adminPages/adminekstrakurikuler')->middleware('auth');
Route::view('/addekstrakurikuler', 'adminPages/addekstrakurikuler')->middleware('auth');
Route::view('/updateekstrakurikuler', 'adminPages/updateekstrakurikuler')->middleware('auth');

//ADMIN-BERITA
Route::view('/adminberita', 'adminPages/adminberita')->middleware('auth');
Route::view('/addberita', 'adminPages/addberita')->middleware('auth');
Route::view('/updateberita', 'adminPages/updateberita')->middleware('auth');

//ADMIN-ALUMNI
Route::get('/adminalumni', [AlumniController::class, 'admin'])->middleware('auth');
Route::get('/addalumni', [AlumniController::class, 'create'])->middleware('auth');
Route::post('/addalumni/store', [AlumniController::class, 'store'])->middleware('auth');
Route::get('/updatealumni/{id}', [AlumniController::class, 'update'])->middleware('auth');
Route::put('/updatealumni/{id}/store', [AlumniController::class, 'updateStore'])->middleware('auth');
Route::delete('/deletealumni/{id}', [AlumniController::class, 'delete'])->middleware('auth');

//ADMIN-PROFIL
Route::get('/adminprofil', [AdminProfilController::class, 'admin'])->middleware('auth')->middleware('auth');

//ADMIN-MOTO
Route::get('/addmoto', [MotoController::class, 'create'])->middleware('auth');
Route::post('/addmoto/store', [MotoController::class, 'store'])->middleware('auth');
Route::get('/updatemoto/{id}', [MotoController::class, 'update'])->middleware('auth');
Route::post('/updatemoto/{id}/store', [MotoController::class, 'updateStore'])->middleware('auth');
Route::delete('/deletemoto/{id}', [MotoController::class, 'delete'])->middleware('auth');

//ADMIN-VISI
Route::get('/addvisi', [VisiController::class, 'create'])->middleware('auth');
Route::post('/addvisi/store', [VisiController::class, 'store'])->middleware('auth');
Route::get('/updatevisi/{id}', [VisiController::class, 'update'])->middleware('auth');
Route::post('/updatevisi/{id}/store', [VisiController::class, 'updateStore'])->middleware('auth');
Route::delete('/deletevisi/{id}', [VisiController::class, 'delete'])->middleware('auth');

//ADMIN-MISI
Route::get('/addmisi', [MisiController::class, 'create'])->middleware('auth');
Route::post('/addmisi/store', [MisiController::class, 'store'])->middleware('auth');
Route::get('/updatemisi/{id}', [MisiController::class, 'update'])->middleware('auth');
Route::post('/updatemisi/{id}/store', [MisiController::class, 'updateStore'])->middleware('auth');
Route::delete('/deletemisi/{id}', [MisiController::class, 'delete'])->middleware('auth');

//ADMIN-BIO-KEPSEK
Route::get('/updatekepsek/{id}', [KepsekController::class, 'update'])->middleware('auth');
Route::post('/updatekepsek/{id}/store', [KepsekController::class, 'updateStore'])->middleware('auth');


//ADMIN-PROFIL-PENDIDIK
Route::get('/profil', [PendidikController::class, 'index'])->middleware('auth');
Route::get('/adminprofil/addpendidik', [PendidikController::class, 'create'])->middleware('auth');
Route::post('/addpendidik/store', [PendidikController::class, 'store'])->middleware('auth');
Route::put('/updatependidik/{id}', [PendidikController::class, 'update'])->middleware('auth');
Route::get('/updatependidik/{id}/edit', [PendidikController::class, 'edit'])->middleware('auth');
Route::delete('/deletependidik/{id}', [PendidikController::class, 'destroy'])->middleware('auth');


//ADMIN-PROFIL-STRUKTUR-ORGANISASI
Route::get('/profil', [StrukturController::class, 'index'])->middleware('auth');
Route::get('/adminprofil/addstruktur', [StrukturController::class, 'create'])->middleware('auth');
Route::post('/addstruktur/store', [StrukturController::class, 'store'])->middleware('auth');
Route::put('/updatestruktur/{id}', [StrukturController::class, 'update'])->middleware('auth');
Route::get('/updatestruktur/{id}/edit', [StrukturController::class, 'edit'])->middleware('auth');


//ADMIN-PROFIL-KOMITE-SEKOLAH
Route::get('/profil', [KomiteController::class, 'index'])->middleware('auth');
Route::get('/updatekomite/{id}', [KomiteController::class, 'update'])->middleware('auth');
Route::put('/updatekomite/{id}/store', [KomiteController::class, 'updateStore'])->middleware('auth');
Route::get('/addkomite', [KomiteController::class, 'create'])->middleware('auth');
Route::delete('/deletekomite/{id}', [KomiteController::class, 'delete'])->middleware('auth');
Route::post('/addkomite/store', [KomiteController::class, 'store'])->middleware('auth');
