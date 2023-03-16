<?php

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

Route::prefix('mphstar')->group(function () {
    // TODO: Prefix mphstar
    Route::prefix('admin')->group(function () {
        // TODO: Prefix mphstar
        // TODO: /mphstar/admin/
        Route::get('/', function () {
            return view('mphstar.admin.dashboard');
        })->name('mphstar.admin.dashboard');
    });

    // TODO: /mphstar/
    Route::get('/', function () {
        return view('mphstar.landing.main');
    });
});
