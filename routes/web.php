<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;

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

Route::get('/editmpl', function () {
    return view('admin/editmapel');
});

Route::resource('/kelas', KelasController::class);
Route::resource('/mapel', MapelController::class);
Route::get('/mapel/create/{id}', [MapelController::class, 'mapel']);