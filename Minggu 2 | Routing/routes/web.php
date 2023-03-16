<?php

use Illuminate\Http\Request;
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


// TODO: Route default laravel
// TODO: Dasar Routing
// TODO: '/' adalah url, dimana url tersebut akan menampilkan view welcome yang ada pada resources/views
Route::get('/', function () {
    return view('welcome');
});

// TODO: Saat url /login diketik akan menampilkan views login.blade.php
Route::view('/login', 'login');

Route::post('/checklogin', function (Request $request) {
    // TODO: Menampilkan semua hasil dari $request yang dikirim melalui POST
    dd($request);
});

// TODO: Ketika memasukkan /checklogin langsung dengan method GET akan dialihkan ke url /login
Route::get('/checklogin', function () {
    return redirect('/login');
});

// TODO: Route Parameter
// TODO: saat /users/"nama" maka akan menampilkan User nama
// TODO: saat /users diketikkan maka akan menampilkan nilai nama default yang telah diatur
Route::get('/users/{id?}', function ($id = "Bintang Malindo Eka Putra") {
    return "User " . $id;
})->where(['id' => '[a-zA-Z]+']);
// TODO: where diatas digunakan untuk membatasi penulisan id hanya karakter a-z saja

Route::get('/pengguna/{id}', function ($id = "Bintang Malindo Eka Putra") {
    return "pengguna " . $id;
})->where(['id' => '.*']);
// TODO: Komponen pada routing Laravel memungkinkan semua karakter bisa dimasukkan kecuali. Secara eksplisit mengizinkan / untuk menjadi bagian dari placeholder kita menggunakan kondisi expression reguler where

// TODO: Route Bernama
Route::get('/homepage', function () {
    return "Ini Homepage";
})->name('homepage');

// TODO: Contoh penggunaan Route Bernama
Route::get('/home', function () {
    return redirect()->route('homepage');
});

// TODO: Contoh penulisan Group Routing dengan middleware
Route::middleware(['auth', 'second'])->group(function () {
    Route::get('/dashboard', function () {
        return "ini dashboard";
    });

    // TODO: DImana route /dashboard harus melewati middleware auth dan second terlebih dahulu
});

// TODO: Contoh penulisan Group Routing dengan namespace
Route::namespace('admin')->group(function () {
    Route::get('/controller/product', function () {
        return "ini controller product";
    });
});

// TODO: Contoh penulisan Subdomain Routing
Route::domain('dev.mphstar.com')->group(function () {
    Route::get('/profile', function () {
        return "ini profile";
    });
});

// TODO: Contoh penulisan Group Routing dengan prefix
Route::prefix('guest')->group(function () {
    // TODO: Maka penulisan urlnya yaitu /guest/profile
    Route::get('/profile', function () {
        return "ini profile guest";
    });

    // TODO: DImana route /dashboard harus melewati middleware auth dan second terlebih dahulu
});
