<?php

use App\Http\Controllers\RequestController;
use App\Http\Controllers\SessionController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/session', [SessionController::class, "index"]);
Route::get('/session/create', [SessionController::class, "create"]);
Route::get('/session/delete', [SessionController::class, "delete"]);


Route::get('/request/nama/{nama}', function ($nama) {
    
});

Route::get('/request', function () {
    return view('request');
});

Route::post('/request/proses', [RequestController::class, 'proses']);


Route::get('/test', [TestController::class, 'index']);

Route::get('/test/{nama}', function ($nama, Request $request) {
    // cek jika ada segmen kedua, maka akan menampilkan request segmen kedua
    if($request->segment(2) !== null){
        echo $request->segment(2);
    } else {
        abort(404);
    }
});