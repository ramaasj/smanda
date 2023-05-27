<?php

use App\Http\Controllers\AdminHomeController;
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
use App\Http\Controllers\TenagaPendidikanController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\AdminProfilController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\PersentaseController;
use App\Http\Controllers\PointsController;
use App\Http\Controllers\TokohController;
use App\Http\Controllers\userHomeController;
use App\Http\Controllers\userProfilController;

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
Route::get('/', [UserHomeController::class, 'index']);
//ADMIN-LOGIN
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

//USER-PAGES

Route::get('/home', [UserHomeController::class, 'index']);
Route::get('/profil', [UserProfilController::class, 'index']);
Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/ekstrakurikuler', [EkstrakurikulerController::class, 'index']);
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/detailberita/{id}', [BeritaController::class, 'detail']);
Route::get('/alumni', [AlumniController::class, 'index']);

//ADMIN-HOME
Route::view('/adminHome', 'adminPages/adminHome')->middleware('auth');

//ADMIN-SISWA
Route::get('/adminsiswa', [SiswaController::class, 'admin'])->middleware('auth');
Route::get('/updatesiswa/{id}', [SiswaController::class, 'update'])->middleware('auth');
Route::put('/updatesiswa/{id}/store', [SiswaController::class, 'updateStore'])->middleware('auth');
Route::get('/addsiswa', [SiswaController::class, 'create'])->middleware('auth');
Route::delete('/deletesiswa/{id}', [SiswaController::class, 'delete'])->middleware('auth');
Route::post('/addsiswa/store', [SiswaController::class, 'store'])->middleware('auth');

//ADMIN-EKSTRA
Route::get('/adminekstrakurikuler', [EkstrakurikulerController::class, 'admin'])->middleware('auth');
Route::get('/addekstrakurikuler', [EkstrakurikulerController::class, 'create'])->middleware('auth');
Route::post('/addekstrakurikuler/store', [EkstrakurikulerController::class, 'store'])->middleware('auth');
Route::get('/updateEkstrakurikuler/{id}', [EkstrakurikulerController::class, 'edit'])->middleware('auth');
Route::put('/updatEkstrakurikuler/{id}/store', [EkstrakurikulerController::class, 'update'])->middleware('auth');
Route::delete('/deleteEkstrakurikuler/{id}', [EkstrakurikulerController::class, 'destroy'])->middleware('auth');

//ADMIN-BERITA
Route::get('/adminberita', [BeritaController::class, 'admin'])->middleware('auth');
Route::get('/adminberita/addberita', [BeritaController::class, 'create'])->middleware('auth');
Route::post('/adminberita/addberita/store', [BeritaController::class, 'store'])->middleware('auth');
Route::get('/adminberita/updateberita/{id}', [BeritaController::class, 'edit'])->middleware('auth');
Route::put('/adminberita/updateberita/{id}/store', [BeritaController::class, 'update'])->middleware('auth');
Route::delete('/adminberita/deleteberita/{id}', [BeritaController::class, 'destroy'])->middleware('auth');

// Route::view('/adminberita', 'adminPages/adminberita')->middleware('auth');
// Route::view('/addberita', 'adminPages/addberita')->middleware('auth');
// Route::view('/updateberita', 'adminPages/updateberita')->middleware('auth');

//ADMIN-ALUMNI
Route::get('/adminalumni', [AlumniController::class, 'admin'])->middleware('auth');
Route::get('/addalumni', [AlumniController::class, 'create'])->middleware('auth');
Route::post('/addalumni/store', [AlumniController::class, 'store'])->middleware('auth');
Route::get('/updatealumni/{id}', [AlumniController::class, 'update'])->middleware('auth');
Route::put('/updatealumni/{id}/store', [AlumniController::class, 'updateStore'])->middleware('auth');
Route::delete('/deletealumni/{id}', [AlumniController::class, 'delete'])->middleware('auth');

//ADMIN-PROFIL
Route::get('/adminProfil', [AdminProfilController::class, 'admin'])->middleware('auth')->middleware('auth');

//ADMIN-MOTO
Route::get('/adminProfil/addmoto', [MotoController::class, 'create'])->middleware('auth');
Route::post('/adminProfil/addmoto/store', [MotoController::class, 'store'])->middleware('auth');
Route::put('/adminProfil/updatemoto/{id}', [MotoController::class, 'update'])->middleware('auth');
Route::get('/adminProfil/updatemoto/{id}/edit', [MotoController::class, 'edit'])->middleware('auth');
Route::delete('/adminProfil/deletemoto/{id}', [MotoController::class, 'delete'])->middleware('auth');


//ADMIN-VISI
Route::get('/adminProfil/addvisi', [VisiController::class, 'create'])->middleware('auth');
Route::post('/adminProfil/addvisi/store', [VisiController::class, 'store'])->middleware('auth');
Route::get('/adminProfil/updatevisi/{id}/edit', [VisiController::class, 'update'])->middleware('auth');
Route::post('/adminProfil/updatevisi/{id}/store', [VisiController::class, 'updateStore'])->middleware('auth');
Route::delete('/adminProfil/deletevisi/{id}', [VisiController::class, 'delete'])->middleware('auth');

//ADMIN-MISI
Route::get('/adminProfil/addmisi', [MisiController::class, 'create'])->middleware('auth');
Route::post('/adminProfil/addmisi/store', [MisiController::class, 'store'])->middleware('auth');
Route::get('/adminProfil/updatemisi/{id}/edit', [MisiController::class, 'update'])->middleware('auth');
Route::post('/adminProfil/updatemisi/{id}/store', [MisiController::class, 'updateStore'])->middleware('auth');
Route::delete('/adminProfil/deletemisi/{id}', [MisiController::class, 'delete'])->middleware('auth');

//ADMIN-BIO-KEPSEK
Route::get('/adminProfil/updateKepsek/{id}/edit', [KepsekController::class, 'edit'])->middleware('auth');
Route::put('/adminProfil/updateKepsek/{id}', [KepsekController::class, 'update'])->middleware('auth');


//ADMIN-PROFIL-PENDIDIK
Route::get('/adminProfil/addpendidik', [PendidikController::class, 'create'])->middleware('auth');
Route::post('/adminProfil/addpendidik/store', [PendidikController::class, 'store'])->middleware('auth');
Route::put('/adminProfil/updatependidik/{id}', [PendidikController::class, 'update'])->middleware('auth');
Route::get('/adminProfil/updatependidik/{id}/edit', [PendidikController::class, 'edit'])->middleware('auth');
Route::delete('/adminProfil/deletependidik/{id}', [PendidikController::class, 'destroy'])->middleware('auth');

//ADMIN-PROFIL-TENAGA-PENDIDIK
Route::get('/adminProfil/addtenagapendidik', [TenagaPendidikanController::class, 'create'])->middleware('auth');
Route::post('/adminProfil/addtenagapendidik/store', [TenagaPendidikanController::class, 'store'])->middleware('auth');
Route::put('/adminProfil/updatetenagapendidik/{id}', [TenagaPendidikanController::class, 'update'])->middleware('auth');
Route::get('/adminProfil/updatetenagapendidik/{id}/edit', [TenagaPendidikanController::class, 'edit'])->middleware('auth');
Route::delete('/adminProfil/deletetenagapendidik/{id}', [TenagaPendidikanController::class, 'destroy'])->middleware('auth');

//ADMIN-PROFIL-STRUKTUR-ORGANISASI
Route::get('/adminProfil/addstruktur', [StrukturController::class, 'create'])->middleware('auth');
Route::post('/adminProfil/addstruktur/store', [StrukturController::class, 'store'])->middleware('auth');
Route::put('/adminProfil/updatestruktur/{id}', [StrukturController::class, 'update'])->middleware('auth');
Route::get('/adminProfil/updatestruktur/{id}/edit', [StrukturController::class, 'edit'])->middleware('auth');


//ADMIN-PROFIL-KOMITE-SEKOLAH
Route::get('/adminProfil/updatekomite/{id}', [KomiteController::class, 'update'])->middleware('auth');
Route::put('/adminProfil/updatekomite/{id}/store', [KomiteController::class, 'updateStore'])->middleware('auth');
Route::get('/adminProfil/addkomite', [KomiteController::class, 'create'])->middleware('auth');
Route::delete('/adminProfil/deletekomite/{id}', [KomiteController::class, 'delete'])->middleware('auth');
Route::post('/adminProfil/addkomite/store', [KomiteController::class, 'store'])->middleware('auth');


//ADMIN-HOME
Route::get('/adminHome', [AdminHomeController::class, 'admin'])->middleware('auth')->middleware('auth');

//ADMIN-HOME-GREET
Route::get('/adminHome/addGreet', [GreetController::class, 'create'])->middleware('auth');
Route::post('/adminHome/addGreet/store', [GreetController::class, 'store'])->middleware('auth');
Route::put('/adminHome/updateGreet/{id}', [GreetController::class, 'update'])->middleware('auth');
Route::get('/adminHome/updateGreet/{id}/edit', [GreetController::class, 'edit'])->middleware('auth');

//ADMIN-HOME-POINTS
Route::get('/adminHome/addPoints', [PointsController::class, 'create'])->middleware('auth');
Route::post('/adminHome/addPoints/store', [PointsController::class, 'store'])->middleware('auth');
Route::put('/adminHome/updatePoints/{id}', [PointsController::class, 'update'])->middleware('auth');
Route::get('/adminHome/updatePoints/{id}/edit', [PointsController::class, 'edit'])->middleware('auth');

//ADMIN-HOME-PERSENTASE
Route::get('/adminHome/addpersentase', [PersentaseController::class, 'create'])->middleware('auth');
Route::post('/adminHome/addpersentase/store', [PersentaseController::class, 'store'])->middleware('auth');
Route::put('/adminHome/updatepersentase/{id}', [PersentaseController::class, 'update'])->middleware('auth');
Route::get('/adminHome/updatepersentase/{id}/edit', [PersentaseController::class, 'edit'])->middleware('auth');

//ADMIN-HOME-PERSENTASE
Route::get('/adminHome/addtokoh', [TokohController::class, 'create'])->middleware('auth');
Route::post('/adminHome/addtokoh/store', [TokohController::class, 'store'])->middleware('auth');
Route::put('/adminHome/updateTokoh/{id}', [TokohController::class, 'update'])->middleware('auth');
Route::get('/adminHome/updateTokoh/{id}/edit', [TokohController::class, 'edit'])->middleware('auth');
