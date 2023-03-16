<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


// TODO: Generate routes from laravel ui auth
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// TODO: Route with middleware

// TODO: kita juga dapat menggunakan middleware auth yang sudah ada,
// TODO: Ketika belum login akan dialihkan ke page login
// TODO: Jika sudah, boleh melanjutkan page yang dituju

Route::get('/profile', function () {
    return "Selamat Datang " . Auth::user()->name;
    // TODO: Auth::user()->name digunakan untuk menampilkan nama user yang login
})->middleware('auth');


// TODO: Contoh kasus form input umur
// TODO: Ketika umur >= 18, maka bisa melihat page /profile
// TODO: Jika tidak, akan dikembalikan ke page input umur dengan memberikan status error
Route::view('/age', 'middleware.age');

Route::post('checkage', function (Request $request) {
    return "Anda bisa masuk " . $request->age;
})->middleware('CheckAge');
