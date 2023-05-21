<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/pengalaman_kerja', [ApiController::class, 'show_data']);
Route::get('/pengalaman_kerja/{id}', [ApiController::class, 'show_data_id']);
Route::post('/pengalaman_kerja/add', [ApiController::class, 'add_data']);
Route::post('/pengalaman_kerja/update', [ApiController::class, 'update_data']);
Route::post('/pengalaman_kerja/delete', [ApiController::class, 'delete_data']);
