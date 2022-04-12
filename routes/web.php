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

use App\Http\Controllers\DokterController;
Route::get("Dokter",[DokterController::class, "index"]);
Route::get("Dokter/detail/{id}",[DokterController::class,"detail"]);

use App\Http\Controllers\PasienController;
Route::get("Pasien",[PasienController::class, "index"]);
Route::get("Pasien/detail/{id}",[PasienController::class,"detail"]);
