<?php

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

Route::view('/berita','berita');

Route::view('/alumni','alumni');

Route::view('/adminhome', 'adminPages/adminhome');

Route::view('/adminsiswa', 'adminPages/adminsiswa');

Route::view('/updatesiswa', 'adminPages/updatesiswa');

Route::view('/addsiswa', 'adminPages/addsiswa');

Route::view('/adminekstrakurikuler', 'adminPages/adminekstrakurikuler');

Route::view('/addekstrakurikuler', 'adminPages/addekstrakurikuler');

Route::view('/updateekstrakurikuler', 'adminPages/updateekstrakurikuler');

Route::view('/adminberita', 'adminPages/adminberita');

Route::view('/addberita', 'adminPages/addberita');

Route::view('/updateberita', 'adminPages/updateberita');

Route::view('/adminalumni', 'adminPages/adminalumni');

Route::view('/addalumni', 'adminPages/addalumni');

Route::view('/updatealumni', 'adminPages/updatealumni');