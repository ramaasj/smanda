<?php

use App\Http\Controllers\AlumniController;
use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

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

Route::view('/profil', 'profil');

Route::get('/siswa', [SiswaController::class, 'index']);

Route::view('/ekstrakurikuler','ekstrakurikuler');

Route::get('/berita', [BeritaController::class, 'index']);

Route::view('/detail-berita', 'detail-berita');

Route::get('/alumni', [AlumniController::class, 'index']);

Route::view('/adminhome', 'adminPages/adminhome');

Route::view('/adminprofil', 'adminPages/adminprofil');

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