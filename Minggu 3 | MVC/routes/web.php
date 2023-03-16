<?php

use App\Http\Controllers\GuestPageController;
use App\Http\Controllers\ManagementUserController;
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

Route::prefix('guest')->group(function () {
    // TODO: prefix guest
    Route::resource('user', GuestPageController::class);
    // TODO: 'user' sebagai url utama, untuk mengaksesnya 
    // TODO:              => /guest/user/
    // TODO: GuestPageController nama controller yang akan digunakan
});

Route::get('/home', [ManagementUserController::class, 'index']);
// TODO: /home adalah url
// TODO: ManagementUserController adalah nama controller
// TODO: index nama method yang dipanggil pada controller
