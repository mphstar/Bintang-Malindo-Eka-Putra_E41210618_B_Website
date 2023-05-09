<?php

use App\Http\Controllers\UploadController;
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

Route::get('/upload', [UploadController::class, 'upload'])->name('upload');
Route::post('/upload/proses', [UploadController::class, 'proses_upload'])->name('upload.proses');

Route::get('/resize', [UploadController::class, 'resize'])->name('resize');
Route::post('/resize/proses', [UploadController::class, 'proses_resize'])->name('resize.proses');

Route::get('/dropzone', [UploadController::class, 'dropzone'])->name('dropzone');
Route::post('/dropzone/proses', [UploadController::class, 'proses_dropzone'])->name('dropzone.proses');

Route::get('/pdf_dropzone', [UploadController::class, 'pdf'])->name('pdf');
Route::post('/pdf_dropzone/proses', [UploadController::class, 'proses_pdf'])->name('pdf.proses');
