<?php

use App\Http\Controllers\PengalamanKerjaController;
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
    return redirect()->route('admin.dashboard');
});

Route::get('/home', [PengalamanKerjaController::class, 'data'])->name('admin.dashboard');

Route::get('/home/create', function () {
    return view('admin.create');
})->name('admin.create');

Route::post('/home/create/proses', [PengalamanKerjaController::class, 'proses_create']);

Route::post('/home/update/proses', [PengalamanKerjaController::class, 'proses_update']);

Route::get('/home/delete/{id}', [PengalamanKerjaController::class, 'proses_delete']);

Route::get('/home/search', [PengalamanKerjaController::class, 'search_data']);

Route::get('/home/update/{id}', [PengalamanKerjaController::class, 'update']);