<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/piew', function () {
    return view('welcome');
});


// Route::get('/', [IndexController::class, 'index'])->name('home');

// Route::get('/kontak', [IndexController::class, 'kontak'])->name('kontak');

Route::get('/', function () {
    return view('tesview', [
        'title' => 'Beranda'
    ]);
});

Route::get('/kontak', function () {
    return view('contact', [
        'title' => 'Kontak'
    ]);
});

Route::get('/tentang', function () {
    return view('about', [
        'title' => 'Tentang'
    ]);
});

// Route::get('/angga', function () {
//     return view('angga');
// });

// Route::get('/angga/{nama}/{umur}', function ($n, $u) {
//     return view('angga', ['namanya'=>$n, 'umurnya'=>$u]);
// });
